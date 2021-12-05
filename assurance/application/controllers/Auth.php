<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Auth extends CI_Controller 

{

	public function __construct()

	{

		parent::__construct();

		$this->load->library('form_validation');

	}

	

	public function index()

	{

		

		$this->form_validation->set_rules('username', 'Username', 'trim|required');

		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		

		if($this->form_validation->run() == false){

			$data['tittle'] = 'Login - Report Assurance TA';

			$this->load->view('auth/templates/auth_header', $data);

			$this->load->view('auth/login');

			$this->load->view('auth/templates/auth_footer');

		} else {

			//validasi sukses

			$this->_login();

		}

	}



	private function _login() {

		$username = $this->input->post('username');

		$password = $this->input->post('password');



		$user = $this->db->get_where('user', ['username' => $username])->row_array();

		

	//jika usernya ada

		if($user) {

			if($user['is_active'] == 1) {

			//cek password

				if(password_verify($password, $user['password'])) {

				$data = [

					'name' => $user['name'],

					'username' => $user['username'],

					'role_id' => $user['role_id'],

					'area' => $user['area'],

					'jabatan' => $user['jabatan']




				];

				$this->session->set_userdata($data);

				if ($user['role_id'] == 0) {

					redirect('dashboard');

				} elseif ($user['role_id'] == 1) {

					redirect('dashboard');

				} elseif ($user['role_id'] == 2) {

					redirect('dashboard');

				} elseif ($user['role_id'] == 3) {

					redirect('dashboard');

				} elseif ($user['role_id'] == 4) {

					redirect('dashboard');

				} elseif ($user['role_id'] == 5) {

					redirect('dashboard');

				}



				} else {

					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');

					redirect('auth');

				}

			} else {

				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username belum diaktivasi</div>');

				redirect('auth');

				}

		} else {

			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username belum terdaftar</div>');

			redirect('auth');

			}

	}

	

	

// 	public function registration()

// 	{

// 		$this->form_validation->set_rules('name', 'Name', 'required|trim');

// 		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [

// 			'is_unique' => 'Username sudah digunakan'

// 		]);

// 		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [

// 			'matches' => 'Password tidak sama!',

// 			'min_length' => 'Password terlalu pendek!'

// 		]);

// 		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

// 		$this->form_validation->set_rules('area', 'Area', 'required');

// 		$this->form_validation->set_rules('sektor', 'Sektor', 'required');

// 		$this->form_validation->set_rules('role_id', 'Role_id', 'required');







// 		if ($this->form_validation->run() == false) {

			

// 			$data['tittle'] = 'Registrasi';

// 			$this->load->view('auth/templates/auth_header', $data);

// 			$this->load->view('auth/registration');

// 			$this->load->view('auth/templates/auth_footer');

			

// 		} else {

// 			$data = [

// 				'name' => htmlspecialchars($this->input->post('name', true)),

// 				'username' => htmlspecialchars($this->input->post('username', true)),

// 				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),

// 				'area' => $this->input->post('area'),

// 				'sektor' => $this->input->post('sektor'),

// 				'role_id' => $this->input->post('role_id'),

// 				'is_active' => 1

// 			];



// 			$this->db->insert('user', $data);

// 			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User berhasil ditambahkan</div>');

// 			redirect('auth/registration');



// 		}

// 	}





	public function logout() {

		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role_id');



		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil keluar</div>');

		redirect('auth');

	}



	public function blocked() {

		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $role_id = $this->session->userdata('role_id');
                            
        $queryLoginAs = "SELECT `user_role`.`id`, `role` FROM `user_role` JOIN `user` ON `user_role`.`id` = `user`.`role_id` WHERE `user`.`role_id` = $role_id";

        $data['loginas'] = $this->db->query($queryLoginAs)->row_array();


		$this->load->view('auth/blocked', $data);

	}



}

