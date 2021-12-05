<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Performansi_model extends CI_Model {
    private $_crew = "teknisi";

    public $id;
    public $nama;
    public $username;
    public $password;
    public $area;
    public $sektor;
    public $role_id;

    public function getAll() {
        return $this->db->get($this->_crew)->result();
    }

    public function getTekArea($area) {
        return
        $this->db->query("SELECT teknisi.*,
        SUM(if(status_tiket='ORDER',1, 0)) 'order',
        SUM(if(status_tiket='PENDING',1, 0)) 'pending',
        SUM(if(status_tiket='CLOSED',1, 0)) 'closed'
        FROM teknisi INNER JOIN nossa
        ON nossa.assigned_to = teknisi.crew
        WHERE teknisi.sektor = '$area'
        GROUP BY teknisi.nama")->result_array();
        // return $this->db->query("SELECT * FROM teknisi WHERE (sektor = '$area')")->result();
        }

    public function hitung() {
        return
        $this->db->query("SELECT teknisi.*,
        SUM(if(status_tiket='ORDER',1, 0)) 'order',
        SUM(if(status_tiket='PENDING',1, 0)) 'pending',
        SUM(if(status_tiket='CLOSED',1, 0)) 'closed'
        FROM teknisi INNER JOIN nossa
        ON nossa.assigned_to = teknisi.crew
        GROUP BY teknisi.crew")->result_array();

        // $hasil = $this->db->get('teknisi');
        // return $hasil;
    }


    

}