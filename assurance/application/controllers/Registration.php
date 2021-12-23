<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Registration extends CI_Controller 

{

	public function __construct()

	{

		parent::__construct();

        is_logged_in();

		$this->load->library('form_validation');

	}

	

	public function index()

	{

		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        

        $role_id = $this->session->userdata('role_id');

                            

        $queryLoginAs = "SELECT `user_role`.`id`, `role` FROM `user_role` JOIN `user` ON `user_role`.`id` = `user`.`role_id` WHERE `user`.`role_id` = $role_id";



        $data['loginas'] = $this->db->query($queryLoginAs)->row_array();





        $data['tittle'] = 'RAJA - Add User';

		

        

        // Validasi 

        $this->form_validation->set_rules('name', 'Name', 'required|trim');

		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [

			'is_unique' => 'Username sudah digunakan'

		]);

		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [

			'matches' => 'Password tidak sama!',

			'min_length' => 'Password terlalu pendek!'

		]);

		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		$this->form_validation->set_rules('area', 'Area', 'required');

		$this->form_validation->set_rules('sektor', 'Sektor', 'required');

		$this->form_validation->set_rules('role_id', 'Role_id', 'required');







		if ($this->form_validation->run() == false) {

			

			$data['tittle'] = $data['tittle'] = 'RAJA - Add User';

			$this->load->view('auth/templates/auth_header', $data);

			$this->load->view('auth/registration_view');

			$this->load->view('auth/templates/auth_footer');

			

		} else {

			$data = [

				'name' => htmlspecialchars($this->input->post('name', true)),

				'username' => htmlspecialchars($this->input->post('username', true)),

				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),

				'area' => $this->input->post('area'),

				'sektor' => $this->input->post('sektor'),

				'role_id' => $this->input->post('role_id'),

				'is_active' => 1

			];



			$this->db->insert('user', $data);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User berhasil ditambahkan</div>');

			redirect('registration');



		}

		

	}

}