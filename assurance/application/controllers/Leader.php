<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Leader extends CI_Controller {

    public function __construct() {

        parent::__construct();

        

        is_logged_in();

        

        $this->load->model('leader_model');

        $this->load->library('form_validation');

        $this->load->library('session');

    }



    public function index() {

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $role_id = $this->session->userdata('role_id');
                            
        $queryLoginAs = "SELECT `user_role`.`id`, `role` FROM `user_role` JOIN `user` ON `user_role`.`id` = `user`.`role_id` WHERE `user`.`role_id` = $role_id";

        $data['loginas'] = $this->db->query($queryLoginAs)->row_array();
        
        
        $data["leader"] = $this->leader_model->getAll();

        $this->load->view("admin/leader/data_leader", $data);



    }



    public function add() {

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $role_id = $this->session->userdata('role_id');
                            
        $queryLoginAs = "SELECT `user_role`.`id`, `role` FROM `user_role` JOIN `user` ON `user_role`.`id` = `user`.`role_id` WHERE `user`.`role_id` = $role_id";

        $data['loginas'] = $this->db->query($queryLoginAs)->row_array();
        

        $leader = $this->leader_model;

        $validation = $this->form_validation;

        $validation->set_rules($leader->rules());



        if ($validation->run()) {

            $leader->save();

            $this->session->set_flashdata('success_simpan', 'Data berhasil disimpan');
            redirect(site_url('leader'));

        }



            $this->load->view("admin/leader/new_data_leader", $data);

            

    }



    



    public function edit($id = null) {

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        
        $role_id = $this->session->userdata('role_id');
                            
        $queryLoginAs = "SELECT `user_role`.`id`, `role` FROM `user_role` JOIN `user` ON `user_role`.`id` = `user`.`role_id` WHERE `user`.`role_id` = $role_id";

        $data['loginas'] = $this->db->query($queryLoginAs)->row_array();

        if (!isset($id)) redirect('leader');

       

        $leader = $this->leader_model;

        $validation = $this->form_validation;

        $validation->set_rules($leader->rules());



        if ($validation->run()) {

            $leader->update();

            $this->session->set_flashdata('success_update', 'Data berhasil diupdate');
	    redirect(site_url('leader'));

        }

    

        $data["leader"] = $leader->getByid($id);

        if (!$data["leader"]) show_404();



        $this->load->view("admin/leader/edit_data_leader", $data);



    }



    public function delete($id = null)

    {

        if (!isset($id)) show_404();

        

        if ($this->leader_model->delete($id)) {

            $this->session->set_flashdata('success_delete', 'Data berhasil dihapus');

            redirect(site_url('leader'));

        }

    }



}