<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Nossa extends CI_Controller {

    public function __construct() {

        parent::__construct();

        

        is_logged_in();

        

        

        

        $this->load->model('nossa_model');

        $this->load->model('crew_model');

        $this->load->library('form_validation');

        $this->load->library('session');

    }



    public function index() {

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        
        $role_id = $this->session->userdata('role_id');
                            
        $queryLoginAs = "SELECT `user_role`.`id`, `role` FROM `user_role` JOIN `user` ON `user_role`.`id` = `user`.`role_id` WHERE `user`.`role_id` = $role_id";

        $data['loginas'] = $this->db->query($queryLoginAs)->row_array();


	if($this->session->userdata('role_id') == 2 ){
		$area = $this->session->userdata('area');
        	$data["nossa"] = $this->nossa_model->getTiketArea($area);

        	$this->load->view("admin/kawal_tiket_tl/kawal_tiket_tl", $data);

        }else{
        	$data["nossa"] = $this->nossa_model->getTiketHi();

        	$this->load->view("admin/kawal_tiket_tl/kawal_tiket_tl", $data);
        }

    }



    public function edit($no = null) {

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $role_id = $this->session->userdata('role_id');
                            
        $queryLoginAs = "SELECT `user_role`.`id`, `role` FROM `user_role` JOIN `user` ON `user_role`.`id` = `user`.`role_id` WHERE `user`.`role_id` = $role_id";

        $data['loginas'] = $this->db->query($queryLoginAs)->row_array();
        

        if (!isset($no)) redirect('nossa');

        $data["real"] = $this->crew_model->getAll();

        $data["myi"] = $this->crew_model->getAll();

       

        $nossa = $this->nossa_model;

        $validation = $this->form_validation;

        $validation->set_rules($nossa->rules());



        if ($validation->run()) {

            $nossa->update();

            $this->session->set_flashdata('success_update', 'Data berhasil diupdate');

        }

    

        $data["nossa"] = $nossa->getByNo($no);

        if (!$data["nossa"]) show_404();



        $this->load->view("admin/kawal_tiket_tl/edit_kawal_tiket_tl", $data);



    }

}