<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teknisimatch extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        is_logged_in();
        
        $this->load->model('teknisimatch_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index() {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        
        $role_id = $this->session->userdata('role_id');
                            
        $queryLoginAs = "SELECT `user_role`.`id`, `role` FROM `user_role` JOIN `user` ON `user_role`.`id` = `user`.`role_id` WHERE `user`.`role_id` = $role_id";

        $data['loginas'] = $this->db->query($queryLoginAs)->row_array();
       
        $data["data"] = $this->teknisimatch_model->querybuilder();
    

        // $data["nossa"] = $this->tiketmatch_model->matchTiket();
        $this->load->view("admin/teknisi_match/teknisi_match_hd", $data);
    }

    

    
}