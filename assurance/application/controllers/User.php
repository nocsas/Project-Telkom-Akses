<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        is_logged_in();
        

        $this->load->model('user_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index() {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        
        $role_id = $this->session->userdata('role_id');
                            
        $queryLoginAs = "SELECT `user_role`.`id`, `role` FROM `user_role` JOIN `user` ON `user_role`.`id` = `user`.`role_id` WHERE `user`.`role_id` = $role_id";

        $data['loginas'] = $this->db->query($queryLoginAs)->row_array();

        $data["userapp"] = $this->db->get('user')->result();
        $this->load->view("admin/user/user_view", $data);
    }

    public function add() {
            $this->load->view("auth/registration");
            
    }


    public function delete($id = null)
       
    {
        if (!isset($id)) show_404();
        
        if ($this->user_model->delete($id)) {
            $this->session->set_flashdata('success_delete', 'Data berhasil dihapus');
            redirect(site_url('user'));
        }
    }


}