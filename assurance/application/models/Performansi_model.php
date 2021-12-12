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
            FROM teknisi LEFT JOIN nossa 
            ON teknisi.nama = nossa.teknisi_myi 
            WHERE teknisi.jadwal = 'MASUK' AND teknisi.sektor = '$area' 
            GROUP BY teknisi.crew ORDER BY `closed` DESC")->result_array();
        // return $this->db->query("SELECT * FROM teknisi WHERE (sektor = '$area')")->result();
        }

    public function hitung() {
        return
        $this->db->query("SELECT teknisi.*, 
        SUM(if(status_tiket='ORDER',1, 0)) 'order', 
        SUM(if(status_tiket='PENDING',1, 0)) 'pending', 
        SUM(if(status_tiket='CLOSED',1, 0)) 'closed' 
        FROM teknisi LEFT JOIN nossa 
        ON teknisi.nama = nossa.teknisi_myi
        WHERE teknisi.jadwal = 'MASUK'
        GROUP BY teknisi.crew ORDER BY `closed` DESC")->result_array();

        // $hasil = $this->db->get('teknisi');
        // return $hasil;
    }


    

}