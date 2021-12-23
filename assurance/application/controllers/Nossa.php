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
        
        $data['lastUpdate'] = $this->nossa_model->getLastUpdate();
        //----

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

    public function indexOrder() {
        
        $data['lastUpdate'] = $this->nossa_model->getLastUpdate();
        //----

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        
        $role_id = $this->session->userdata('role_id');
                            
        $queryLoginAs = "SELECT `user_role`.`id`, `role` FROM `user_role` JOIN `user` ON `user_role`.`id` = `user`.`role_id` WHERE `user`.`role_id` = $role_id";

        $data['loginas'] = $this->db->query($queryLoginAs)->row_array();


	    if($this->session->userdata('role_id') == 2 ){
		    $area = $this->session->userdata('area');
        	$data["nossa"] = $this->nossa_model->getBlnkArea($area);
            $data["real"] = $this->crew_model->getTekAreaMenuEdit($area);


        	$this->load->view("admin/kawal_tiket_tl/kawal_tiket_order", $data);

        }else{
        	$data["nossa"] = $this->nossa_model->getBlnkAll();
            $data["real"] = $this->crew_model->getAll();

        	$this->load->view("admin/kawal_tiket_tl/kawal_tiket_order", $data);
        }

    }

    public function edit($no = null) {
        
        $data['lastUpdate'] = $this->nossa_model->getLastUpdate();
        //----

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $role_id = $this->session->userdata('role_id');
                            
        $queryLoginAs = "SELECT `user_role`.`id`, `role` FROM `user_role` JOIN `user` ON `user_role`.`id` = `user`.`role_id` WHERE `user`.`role_id` = $role_id";

        $data['loginas'] = $this->db->query($queryLoginAs)->row_array();
        
        //------------------------------------------------------
        if($this->session->userdata('role_id') == 2 ){
            $area = $this->session->userdata('area');
                $data["real"] = $this->crew_model->getTekAreaMenuEdit($area);
                $data["myi"] = $this->crew_model->getTekAreaMenuEdit($area);
    
                
    
            }else{
                $data["real"] = $this->crew_model->getAll();
                $data["myi"] = $this->crew_model->getAll();
    
               
            }
        //-------------------------------------------------

        if (!isset($no)) redirect('nossa');

        // $data["real"] = $this->crew_model->getAll();

        // $data["myi"] = $this->crew_model->getAll();

       

        $nossa = $this->nossa_model;

        $validation = $this->form_validation;

        $validation->set_rules('real_teknisi','Real Teknisi','required');

        $validation->set_rules('teknisi_myi','Teknisi Myi','required');

        $validation->set_rules('kategori','Kategori','required');

        $validation->set_rules('kendala','Kendala','required');

        $validation->set_rules('status_tiket','Status Tiket','required');

        $validation->set_rules('status_manja','Status Manja','required');


        $validation->set_rules($nossa->rules());



        if ($validation->run()) {

            $nossa->update();

            $this->session->set_flashdata('success_update', 'Data berhasil diupdate');
            redirect(site_url('nossa'));


        }else {
            
            $this->session->set_flashdata('gagal_update', 'Data gagal diupdate pastikan semua data sudah diisi');
            
        }

    

        $data["nossa"] = $nossa->getByNo($no);

        if (!$data["nossa"]) show_404();



        $this->load->view("admin/kawal_tiket_tl/edit_kawal_tiket_tl", $data);



    }


    public function editOrder($no = null) {
        
        if (!isset($no)) show_404();
        
        if ($this->nossa_model->updateOrder($no)) {
            $this->session->set_flashdata('success_update', 'Data berhasil diupdate');
            redirect(site_url('kawal_order'));
        }
    }





}