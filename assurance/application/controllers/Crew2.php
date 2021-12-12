<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Crew2 extends CI_Controller {

    public function __construct() {

        parent::__construct();

        

        is_logged_in();

        

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
        	$data["crew"] = $this->crew_model->getTekArea($area);
        	$data["tekTotal"] = $this->crew_model->getTekTotalArea($area);
        	$data["tekMasuk"] = $this->crew_model->getTekMasukArea($area);
        	$data["tekLibur"] = $this->crew_model->getTekLiburArea($area);
        	$data["tekIjin"] = $this->crew_model->getTekIjinArea($area);

        	$this->load->view("admin/mapping_teknisi/mapping_teknisi", $data);
        }else{
        	$data["crew"] = $this->crew_model->getAll();
        	$data["tekTotal"] = $this->crew_model->getTekTotalAll();
            $data["tekMasuk"] = $this->crew_model->getTekMasukAll();
            $data["tekLibur"] = $this->crew_model->getTekLiburAll();
            $data["tekIjin"] = $this->crew_model->getTekIjinAll();

        	$this->load->view("admin/mapping_teknisi/mapping_teknisi", $data);
        }


    }



    public function edit($id = null) {

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        
        $role_id = $this->session->userdata('role_id');
                            
        $queryLoginAs = "SELECT `user_role`.`id`, `role` FROM `user_role` JOIN `user` ON `user_role`.`id` = `user`.`role_id` WHERE `user`.`role_id` = $role_id";

        $data['loginas'] = $this->db->query($queryLoginAs)->row_array();

        if (!isset($id)) redirect('crew');

       

        $crew = $this->crew_model;

        $validation = $this->form_validation;

        $validation->set_rules($crew->rules());



        if ($validation->run()) {

            $crew->update();

            $this->session->set_flashdata('success_update', 'Data berhasil diupdate');
            redirect(site_url('crew2'));


        }

    

        $data["crew"] = $crew->getByid($id);

        if (!$data["crew"]) show_404();



        $this->load->view("admin/mapping_teknisi/edit_mapping_teknisi", $data);



    }



}