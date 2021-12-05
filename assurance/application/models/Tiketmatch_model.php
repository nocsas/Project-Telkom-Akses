<?php defined('BASEPATH') OR exit('No direct script access allowed');

class TiketMatch_model extends CI_Model {
    private $_nossa = "nossa";

    public $no;
    public $incident;
    public $workzone;
    public $service_no;
    public $assigned_to;
    public $booking_date;
    public $reported_date;
    public $status;
    public $last_work_log;
    public $jenis_tiket;
    public $teknisi_nossa;
    public $real_teknisi;
    public $teknisi_myi;
    public $kategori;
    public $kendala;
    public $status_tiket;
    public $status_manja;
    public $keterangan;
    public $date_inpute;
    public $date_update;

    public function rules(){
        return[

            ['field' => 'incident',
            'label' => 'Incident',
            'rules' => 'required'],

            ['field' => 'workzone',
            'label' => 'Workzone',
            'rules' => 'required'],

            ['field' => 'service_no',
            'label' => 'Service Number',
            'rules' => ''],

            ['field' => 'assigned_to',
            'label' => 'Assigned To',
            'rules' => ''],

            ['field' => 'booking_date',
            'label' => 'Booking Date',
            'rules' => ''],

            ['field' => 'reported_date',
            'label' => 'Reported Date',
            'rules' => ''],

            ['field' => 'status',
            'label' => 'Status',
            'rules' => 'required'],

            ['field' => 'last_work_log',
            'label' => 'Last Work Log',
            'rules' => ''],

            ['field' => 'jenis_tiket',
            'label' => 'Jenis Tiket',
            'rules' => ''],

            ['field' => 'teknisi_nossa',
            'label' => 'Teknisi_nossa',
            'rules' => 'required'],

            ['field' => 'real_teknisi',
            'label' => 'Real Teknisi',
            'rules' => 'required'],

            ['field' => 'teknisi_myi',
            'label' => 'Teknisi Myi',
            'rules' => 'required'],

            ['field' => 'kategori',
            'label' => 'Kategori',
            'rules' => 'required'],

            ['field' => 'kendala',
            'label' => 'Kendala',
            'rules' => 'required'],

            ['field' => 'status_tiket',
            'label' => 'Status Tiket',
            'rules' => 'required'],

            ['field' => 'status_manja',
            'label' => 'Status Manja',
            'rules' => 'required'],

            ['field' => 'keterangan',
            'label' => 'Keterangan',
            'rules' => ''],

            ['field' => 'date_inpute',
            'label' => 'Date Inpute',
            'rules' => 'required'],

            ['field' => 'date_update',
            'label' => 'Date Update',
            'rules' => 'required']

        ];

    }

    public function getAll() {
        return $this->db->get($this->_nossa)->result();
    }

    
    
    public function querybuilder() {
        return 
        $this->db->query("SELECT * FROM nossa WHERE (status <> status_tiket)")->result();
       
    }

    // public function matchTiket() {
        
    //     return $this->db->get_where($this->_nossa, ["status" => "BACKEND" , "status_tiket" => "BACKEND"])->result();
        
    // }

    // public function getByIn($incident) {
    //     return $this->db->get_where($this->_nossa, ["incident" => $incident])->row();
    // }

    // public function getTiketHi() {
    //     return $this->db->get_where($this->_nossa, ["date_inpute" => date("Y-m-d")])->result();
    // }

    
}