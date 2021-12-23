<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Performansi extends CI_Controller {
    public function __construct() {
        parent::__construct();

        is_logged_in();
        
        $this->load->model('performansi_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index() {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        
        $role_id = $this->session->userdata('role_id');
        
        $bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
                            
        $queryLoginAs = "SELECT `user_role`.`id`, `role` FROM `user_role` JOIN `user` ON `user_role`.`id` = `user`.`role_id` WHERE `user`.`role_id` = $role_id";

        $data['loginas'] = $this->db->query($queryLoginAs)->row_array();

        if($this->session->userdata('role_id') == 2 ){
            $area = $this->session->userdata('area');
                $data["crew"] = $this->performansi_model->getTekArea($area);
                $data["hasil"] = $this->performansi_model->getTekAreaBulan($area,$bulan,$tahun);
    
                $this->load->view("admin/performansi_teknisi/performansi_teknisi", $data);
            }else{
                $data["crew"] = $this->performansi_model->hitung();
                $data["hasil"] = $this->performansi_model->getTekAllBulan($bulan,$tahun);
    
                $this->load->view("admin/performansi_teknisi/performansi_teknisi", $data);
            }

    }
    
    public function caribulan(){
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        
        $role_id = $this->session->userdata('role_id');

        $bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
                            
        $queryLoginAs = "SELECT `user_role`.`id`, `role` FROM `user_role` JOIN `user` ON `user_role`.`id` = `user`.`role_id` WHERE `user`.`role_id` = $role_id";

        $data['loginas'] = $this->db->query($queryLoginAs)->row_array();

        if($this->session->userdata('role_id') == 2 ){
            $area = $this->session->userdata('area');
                $data["crew"] = $this->performansi_model->getTekArea($area);
                $data["hasil"] = $this->performansi_model->getTekAreaBulan($area,$bulan,$tahun);
    
                $this->load->view("admin/performansi_teknisi/performansi_teknisi", $data);
            }else{
                $data["hasil"] = $this->performansi_model->getTekAllBulan($bulan,$tahun);
                $data["crew"] = $this->performansi_model->hitung();
                
    
                $this->load->view("admin/performansi_teknisi/performansi_teknisi", $data);
            }

        
    }
    
    
    
    
}