<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Crew extends CI_Controller {

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
        
        
        $data["crew"] = $this->crew_model->getAll();

        $this->load->view("admin/data_crew/data_crew", $data);



    }



    public function add() {

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $role_id = $this->session->userdata('role_id');
                            
        $queryLoginAs = "SELECT `user_role`.`id`, `role` FROM `user_role` JOIN `user` ON `user_role`.`id` = `user`.`role_id` WHERE `user`.`role_id` = $role_id";

        $data['loginas'] = $this->db->query($queryLoginAs)->row_array();
        

        $crew = $this->crew_model;

        $validation = $this->form_validation;

	$validation->set_rules('crew','Crew','required|is_unique[teknisi.crew]');

        $validation->set_rules($crew->rules());



        if ($validation->run()) {

            $crew->save();

            $this->session->set_flashdata('success_simpan', 'Data berhasil disimpan');
            redirect(site_url('crew'));

        }



            $this->load->view("admin/data_crew/new_data_crew", $data);

            

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
	    redirect(site_url('crew'));

        }

    

        $data["crew"] = $crew->getByid($id);

        if (!$data["crew"]) show_404();



        $this->load->view("admin/data_crew/edit_data_crew", $data);



    }



    public function delete($id = null)

    {

        if (!isset($id)) show_404();

        

        if ($this->crew_model->delete($id)) {

            $this->session->set_flashdata('success_delete', 'Data berhasil dihapus');

            redirect(site_url('crew'));

        }

    }



}