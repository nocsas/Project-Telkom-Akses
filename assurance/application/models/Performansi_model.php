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
            SUM(if(status_tiket='CLOSED',1, 0)) 'closed',
            COUNT(status_tiket) 'jumlahtiket'
            FROM teknisi LEFT JOIN nossa 
            ON teknisi.nama = nossa.real_teknisi 
            WHERE teknisi.jadwal = 'MASUK' AND teknisi.sektor = '$area' 
            GROUP BY teknisi.crew ORDER BY `jumlahtiket` DESC")->result_array();
        // return $this->db->query("SELECT * FROM teknisi WHERE (sektor = '$area')")->result();
        }

    public function hitung() {
        return
        $this->db->query("SELECT teknisi.*, 
       
        SUM(if(status_tiket='ORDER',1, 0)) 'order', 
        SUM(if(status_tiket='PENDING',1, 0)) 'pending', 
        SUM(if(status_tiket='CLOSED',1, 0)) 'closed',
        COUNT(status_tiket) 'jumlahtiket'
        FROM teknisi LEFT JOIN nossa 
        ON teknisi.nama = nossa.real_teknisi
        WHERE teknisi.jadwal = 'MASUK'
        GROUP BY teknisi.crew ORDER BY `jumlahtiket` DESC")->result_array();

        // $hasil = $this->db->get('teknisi');
        // return $hasil;
    }
    
    public function getTekAllBulan($bulan,$tahun) {
        return
        
        $this->db->query("SELECT teknisi.*, 
        SUM(if(DATE_FORMAT(date_update,'%d') = '01' AND status_tiket='CLOSED',1, 0)) 'tanggal01',
        SUM(if(DATE_FORMAT(date_update,'%d') = '02' AND status_tiket='CLOSED',1, 0)) 'tanggal02',
        SUM(if(DATE_FORMAT(date_update,'%d') = '03' AND status_tiket='CLOSED',1, 0)) 'tanggal03',
        SUM(if(DATE_FORMAT(date_update,'%d') = '04' AND status_tiket='CLOSED',1, 0)) 'tanggal04',
        SUM(if(DATE_FORMAT(date_update,'%d') = '05' AND status_tiket='CLOSED',1, 0)) 'tanggal05',
        SUM(if(DATE_FORMAT(date_update,'%d') = '06' AND status_tiket='CLOSED',1, 0)) 'tanggal06',
        SUM(if(DATE_FORMAT(date_update,'%d') = '07' AND status_tiket='CLOSED',1, 0)) 'tanggal07',
        SUM(if(DATE_FORMAT(date_update,'%d') = '08' AND status_tiket='CLOSED',1, 0)) 'tanggal08',
        SUM(if(DATE_FORMAT(date_update,'%d') = '09' AND status_tiket='CLOSED',1, 0)) 'tanggal09',
        SUM(if(DATE_FORMAT(date_update,'%d') = '10' AND status_tiket='CLOSED',1, 0)) 'tanggal10',
        SUM(if(DATE_FORMAT(date_update,'%d') = '11' AND status_tiket='CLOSED',1, 0)) 'tanggal11',
        SUM(if(DATE_FORMAT(date_update,'%d') = '12' AND status_tiket='CLOSED',1, 0)) 'tanggal12',
        SUM(if(DATE_FORMAT(date_update,'%d') = '13' AND status_tiket='CLOSED',1, 0)) 'tanggal13',
        SUM(if(DATE_FORMAT(date_update,'%d') = '14' AND status_tiket='CLOSED',1, 0)) 'tanggal14',
        SUM(if(DATE_FORMAT(date_update,'%d') = '15' AND status_tiket='CLOSED',1, 0)) 'tanggal15',
        SUM(if(DATE_FORMAT(date_update,'%d') = '16' AND status_tiket='CLOSED',1, 0)) 'tanggal16',
        SUM(if(DATE_FORMAT(date_update,'%d') = '17' AND status_tiket='CLOSED',1, 0)) 'tanggal17',
        SUM(if(DATE_FORMAT(date_update,'%d') = '18' AND status_tiket='CLOSED',1, 0)) 'tanggal18',
        SUM(if(DATE_FORMAT(date_update,'%d') = '19' AND status_tiket='CLOSED',1, 0)) 'tanggal19',
        SUM(if(DATE_FORMAT(date_update,'%d') = '20' AND status_tiket='CLOSED',1, 0)) 'tanggal20',
        SUM(if(DATE_FORMAT(date_update,'%d') = '21' AND status_tiket='CLOSED',1, 0)) 'tanggal21',
        SUM(if(DATE_FORMAT(date_update,'%d') = '22' AND status_tiket='CLOSED',1, 0)) 'tanggal22',
        SUM(if(DATE_FORMAT(date_update,'%d') = '23' AND status_tiket='CLOSED',1, 0)) 'tanggal23',
        SUM(if(DATE_FORMAT(date_update,'%d') = '24' AND status_tiket='CLOSED',1, 0)) 'tanggal24',
        SUM(if(DATE_FORMAT(date_update,'%d') = '25' AND status_tiket='CLOSED',1, 0)) 'tanggal25',
        SUM(if(DATE_FORMAT(date_update,'%d') = '26' AND status_tiket='CLOSED',1, 0)) 'tanggal26',
        SUM(if(DATE_FORMAT(date_update,'%d') = '27' AND status_tiket='CLOSED',1, 0)) 'tanggal27',
        SUM(if(DATE_FORMAT(date_update,'%d') = '28' AND status_tiket='CLOSED',1, 0)) 'tanggal28',
        SUM(if(DATE_FORMAT(date_update,'%d') = '29' AND status_tiket='CLOSED',1, 0)) 'tanggal29',
        SUM(if(DATE_FORMAT(date_update,'%d') = '30' AND status_tiket='CLOSED',1, 0)) 'tanggal30',
        SUM(if(DATE_FORMAT(date_update,'%d') = '31' AND status_tiket='CLOSED',1, 0)) 'tanggal31',
        SUM(if(status_tiket='CLOSED',1, 0)) 'total'
        FROM teknisi LEFT JOIN nossa_save
        ON teknisi.nama = nossa_save.real_teknisi
        WHERE DATE_FORMAT(date_update,'%m') = '$bulan' AND DATE_FORMAT(date_update,'%Y') = '$tahun'
        GROUP BY teknisi.crew 
        ORDER BY `total` DESC")->result_array();
        // return $this->db->query("SELECT * FROM teknisi WHERE (sektor = '$area')")->result();
    }


    public function getTekAreaBulan($area,$bulan,$tahun) {
        return
        
        $this->db->query("SELECT teknisi.*, 
        SUM(if(DATE_FORMAT(date_update,'%d') = '01' AND status_tiket='CLOSED',1, 0)) 'tanggal01',
        SUM(if(DATE_FORMAT(date_update,'%d') = '02' AND status_tiket='CLOSED',1, 0)) 'tanggal02',
        SUM(if(DATE_FORMAT(date_update,'%d') = '03' AND status_tiket='CLOSED',1, 0)) 'tanggal03',
        SUM(if(DATE_FORMAT(date_update,'%d') = '04' AND status_tiket='CLOSED',1, 0)) 'tanggal04',
        SUM(if(DATE_FORMAT(date_update,'%d') = '05' AND status_tiket='CLOSED',1, 0)) 'tanggal05',
        SUM(if(DATE_FORMAT(date_update,'%d') = '06' AND status_tiket='CLOSED',1, 0)) 'tanggal06',
        SUM(if(DATE_FORMAT(date_update,'%d') = '07' AND status_tiket='CLOSED',1, 0)) 'tanggal07',
        SUM(if(DATE_FORMAT(date_update,'%d') = '08' AND status_tiket='CLOSED',1, 0)) 'tanggal08',
        SUM(if(DATE_FORMAT(date_update,'%d') = '09' AND status_tiket='CLOSED',1, 0)) 'tanggal09',
        SUM(if(DATE_FORMAT(date_update,'%d') = '10' AND status_tiket='CLOSED',1, 0)) 'tanggal10',
        SUM(if(DATE_FORMAT(date_update,'%d') = '11' AND status_tiket='CLOSED',1, 0)) 'tanggal11',
        SUM(if(DATE_FORMAT(date_update,'%d') = '12' AND status_tiket='CLOSED',1, 0)) 'tanggal12',
        SUM(if(DATE_FORMAT(date_update,'%d') = '13' AND status_tiket='CLOSED',1, 0)) 'tanggal13',
        SUM(if(DATE_FORMAT(date_update,'%d') = '14' AND status_tiket='CLOSED',1, 0)) 'tanggal14',
        SUM(if(DATE_FORMAT(date_update,'%d') = '15' AND status_tiket='CLOSED',1, 0)) 'tanggal15',
        SUM(if(DATE_FORMAT(date_update,'%d') = '16' AND status_tiket='CLOSED',1, 0)) 'tanggal16',
        SUM(if(DATE_FORMAT(date_update,'%d') = '17' AND status_tiket='CLOSED',1, 0)) 'tanggal17',
        SUM(if(DATE_FORMAT(date_update,'%d') = '18' AND status_tiket='CLOSED',1, 0)) 'tanggal18',
        SUM(if(DATE_FORMAT(date_update,'%d') = '19' AND status_tiket='CLOSED',1, 0)) 'tanggal19',
        SUM(if(DATE_FORMAT(date_update,'%d') = '20' AND status_tiket='CLOSED',1, 0)) 'tanggal20',
        SUM(if(DATE_FORMAT(date_update,'%d') = '21' AND status_tiket='CLOSED',1, 0)) 'tanggal21',
        SUM(if(DATE_FORMAT(date_update,'%d') = '22' AND status_tiket='CLOSED',1, 0)) 'tanggal22',
        SUM(if(DATE_FORMAT(date_update,'%d') = '23' AND status_tiket='CLOSED',1, 0)) 'tanggal23',
        SUM(if(DATE_FORMAT(date_update,'%d') = '24' AND status_tiket='CLOSED',1, 0)) 'tanggal24',
        SUM(if(DATE_FORMAT(date_update,'%d') = '25' AND status_tiket='CLOSED',1, 0)) 'tanggal25',
        SUM(if(DATE_FORMAT(date_update,'%d') = '26' AND status_tiket='CLOSED',1, 0)) 'tanggal26',
        SUM(if(DATE_FORMAT(date_update,'%d') = '27' AND status_tiket='CLOSED',1, 0)) 'tanggal27',
        SUM(if(DATE_FORMAT(date_update,'%d') = '28' AND status_tiket='CLOSED',1, 0)) 'tanggal28',
        SUM(if(DATE_FORMAT(date_update,'%d') = '29' AND status_tiket='CLOSED',1, 0)) 'tanggal29',
        SUM(if(DATE_FORMAT(date_update,'%d') = '30' AND status_tiket='CLOSED',1, 0)) 'tanggal30',
        SUM(if(DATE_FORMAT(date_update,'%d') = '31' AND status_tiket='CLOSED',1, 0)) 'tanggal31',
        SUM(if(status_tiket='CLOSED',1, 0)) 'total'
        FROM teknisi LEFT JOIN nossa_save
        ON teknisi.nama = nossa_save.real_teknisi
        WHERE teknisi.sektor = '$area' AND DATE_FORMAT(date_update,'%m') = '$bulan' AND DATE_FORMAT(date_update,'%Y') = '$tahun'
        GROUP BY teknisi.crew 
        ORDER BY `total` DESC")->result_array();
        // return $this->db->query("SELECT * FROM teknisi WHERE (sektor = '$area')")->result();
    }


    

}