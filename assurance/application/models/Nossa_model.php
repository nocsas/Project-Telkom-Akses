<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Nossa_model extends CI_Model {

    private $_nossa = "nossa";

    private $_teknisi = "teknisi";



    public $no;

    public $incident;

    public $workzone;

    public $sektor;

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



            ['field' => 'no',

            'label' => 'No',

            'rules' => ''],



            ['field' => 'incident',

            'label' => 'Incident',

            'rules' => 'required'],



            ['field' => 'workzone',

            'label' => 'Workzone',

            'rules' => ''],



            ['field' => 'sektor',

            'label' => 'Sektor',

            'rules' => ''],



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

            'rules' => ''],



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

            'rules' => ''],



            ['field' => 'date_update',

            'label' => 'Date Update',

            'rules' => '']



        ];



    }



    public function getAll() {

        return $this->db->get($this->_nossa)->result();

    }



    public function getByNo($no) {

        return $this->db->get_where($this->_nossa, ["no" => $no])->row();

    }



    public function getTiketHi() {
        
        return $this->db->query("SELECT * FROM nossa WHERE (status_tiket <> 'CLOSED' OR status <> 'CLOSED' OR date_update = date('Y-m-d'))")->result();

    }

    public function getTiketArea($area) {
        
        return $this->db->query("SELECT * FROM nossa WHERE ((status_tiket <> 'CLOSED' OR status <> 'CLOSED' OR date_update = date('Y-m-d')) AND sektor = '$area')")->result();

    }




    public function save()

    {

        $post = $this->input->post();

        $this->no               = uniqid();

        $this->incident         = $post["incident"];

        $this->workzone         = $post["workzone"];

        $this->sektor           = $post["sektor"];

        $this->service_no       = $post["service_no"];

        $this->assigned_to      = $post["assigned_to"];

        $this->booking_date     = $post["booking_date"];

        $this->reported_date    = $post["reported_date"];

        $this->status           = $post["status"];

        $this->last_work_log    = $post["last_work_log"];

        $this->jenis_tiket      = $post["jenis_tiket"];

        $this->teknisi_nossa    = $post["teknisi_nossa"];

        $this->real_teknisi     = $post["real_teknisi"];

        $this->teknisi_myi      = $post["teknisi_myi"];

        $this->kategori         = $post["kategori"];

        $this->kendala          = $post["kendala"];

        $this->status_tiket     = $post["status_tiket"];

        $this->status_manja     = $post["status_manja"];

        $this->keterangan       = $post["keterangan"];

        $this->date_inpute      = $post["date_inpute"];

        $this->date_update      = $post["date_update"];

        return $this->db->insert($this->_nossa, $this);

    }



    public function update()

    {

        $post = $this->input->post();

        $this->no               = $post["no"];

        $this->incident         = $post["incident"];

        $this->workzone         = $post["workzone"];

        $this->sektor           = $post["sektor"];

        $this->service_no       = $post["service_no"];

        $this->assigned_to      = $post["assigned_to"];

        $this->booking_date     = $post["booking_date"];

        $this->reported_date    = $post["reported_date"];

        $this->status           = $post["status"];

        $this->last_work_log    = $post["last_work_log"];

        $this->jenis_tiket      = $post["jenis_tiket"];

        $this->teknisi_nossa    = $post["teknisi_nossa"];

        $this->real_teknisi     = $post["real_teknisi"];

        $this->teknisi_myi      = $post["teknisi_myi"];

        $this->kategori         = $post["kategori"];

        $this->kendala          = $post["kendala"];

        $this->status_tiket     = $post["status_tiket"];

        $this->status_manja     = $post["status_manja"];

        $this->keterangan       = $post["keterangan"];

        $this->date_inpute      = $post["date_inpute"];

        $this->date_update      = date('Y-m-d H:i:s');

        return $this->db->update($this->_nossa, $this, array('no' => $post['no']));

    }


    // count dashboard

    // KBU
    // TEKNISI
    public function getTekAsKbu() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sto = 'KBU' AND jadwal = 'MASUK')")->result();
        $stokbu = count($query);
        return $stokbu; 

    }
    public function getTekAcKbu() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sto = 'KBU' AND (jadwal = 'LIBUR' OR jadwal = ''))")->result();
        $stokbu = count($query);
        return $stokbu; 

    }

    // HVC MANJA
    public function getHvcManOrdKbu() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'ORDER' AND workzone = 'KBU')")->result();
        $order = count($query);
        return $order; 

    }
    public function getHvcManClsdKbu() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'KBU')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getHvcManPndgKbu() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'PENDING' AND workzone = 'KBU')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    //HVC NON MANJA
    public function getHvcNonManOrdKbu() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'ORDER' AND workzone = 'KBU')")->result();
        $order = count($query);
        return $order; 

    }
    public function getHvcNonManClsdKbu() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'KBU')")->result();
        $closed = count($query);
        return $closed ; 

    }
    public function getHvcNonManPndgKbu() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'PENDING' AND workzone = 'KBU')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // TTR MANJA
    public function getTtrManOrdKbu() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'ORDER' AND workzone = 'KBU')")->result();
        $order = count($query);
        return $order; 

    }
    public function getTtrManClsdKbu() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'KBU')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getTtrManPndgKbu() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'PENDING' AND workzone = 'KBU')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // TTR NON MANJA
    public function getTtrNonManOrdKbu() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'ORDER' AND workzone = 'KBU')")->result();
        $order = count($query);
        return $order; 

    }
    public function getTtrNonManClsdKbu() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'KBU')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getTtrNonManPndgKbu() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'PENDING' AND workzone = 'KBU')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // REGULAR
    public function getRgrOrdKbu() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'ORDER' AND workzone = 'KBU')")->result();
        $order = count($query);
        return $order; 

    }
    public function getRgrClsdKbu() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'KBU')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getRgrPndgKbu() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'PENDING' AND workzone = 'KBU')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // SQM
    public function getSqmOrdKbu() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'ORDER' AND workzone = 'KBU')")->result();
        $order = count($query);
        return $order; 

    }
    public function getSqmClsdKbu() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'KBU')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getSqmPndgKbu() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'PENDING' AND workzone = 'KBU')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // INFRACARE
    public function getInfraOrdKbu() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'ORDER' AND workzone = 'KBU')")->result();
        $order = count($query);
        return $order; 

    }
    public function getInfraClsdKbu() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'KBU')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getInfraPndgKbu() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'PENDING' AND workzone = 'KBU')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // BLANK
    public function getBlnkKbu() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (status_tiket = '' AND workzone = 'KBU')")->result();
        $blank = count($query);
        return $blank; 

    }
////////////////////////////////////////////



    ////////////////////////////////////////////  SMN /////
    
    // TEKNISI
    public function getTekAsSmn() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sto = 'SMN' AND jadwal = 'MASUK')")->result();
        $stosmn = count($query);
        return $stosmn; 

    }
    public function getTekAcSmn() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sto = 'SMN' AND (jadwal = 'LIBUR' OR jadwal = ''))")->result();
        $stosmn = count($query);
        return $stosmn; 

    }

    // HVC
    public function getHvcManOrdSmn() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'ORDER' AND workzone = 'SMN')")->result();
        $order = count($query);
        return $order; 

    }
    public function getHvcManClsdSmn() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'SMN')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getHvcManPndgSmn() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'PENDING' AND workzone = 'SMN')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    //TTR 3 JAM
    public function getHvcNonManOrdSmn() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'ORDER' AND workzone = 'SMN')")->result();
        $order = count($query);
        return $order; 

    }
    public function getHvcNonManClsdSmn() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'SMN')")->result();
        $closed = count($query);
        return $closed ; 

    }
    public function getHvcNonManPndgSmn() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'PENDING' AND workzone = 'SMN')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // REPORTDATE
    public function getTtrManOrdSmn() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'ORDER' AND workzone = 'SMN')")->result();
        $order = count($query);
        return $order; 

    }
    public function getTtrManClsdSmn() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'SMN')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getTtrManPndgSmn() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'PENDING' AND workzone = 'SMN')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // LOGIC
    public function getTtrNonManOrdSmn() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'ORDER' AND workzone = 'SMN')")->result();
        $order = count($query);
        return $order; 

    }
    public function getTtrNonManClsdSmn() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'SMN')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getTtrNonManPndgSmn() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'PENDING' AND workzone = 'SMN')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // REGULAR
    public function getRgrOrdSmn() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'ORDER' AND workzone = 'SMN')")->result();
        $order = count($query);
        return $order; 

    }
    public function getRgrClsdSmn() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'SMN')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getRgrPndgSmn() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'PENDING' AND workzone = 'SMN')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // SQM
    public function getSqmOrdSmn() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'ORDER' AND workzone = 'SMN')")->result();
        $order = count($query);
        return $order; 

    }
    public function getSqmClsdSmn() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'SMN')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getSqmPndgSmn() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'PENDING' AND workzone = 'SMN')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // INFRACARE
    public function getInfraOrdSmn() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'ORDER' AND workzone = 'SMN')")->result();
        $order = count($query);
        return $order; 

    }
    public function getInfraClsdSmn() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'SMN')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getInfraPndgSmn() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'PENDING' AND workzone = 'SMN')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // BLANK
    public function getBlnkSmn() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (status_tiket = '' AND workzone = 'SMN')")->result();
        $blank = count($query);
        return $blank; 
    }
///////////////////////////////////////////////////////////////////////////////////////


    ////////////////////////////////////////////  GOD ////////////////////////////////////////
    // TEKNISI
    public function getTekAsGod() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sto = 'GOD' AND jadwal = 'MASUK')")->result();
        $stogod = count($query);
        return $stogod; 

    }
    public function getTekAcGod() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sto = 'GOD' AND (jadwal = 'LIBUR' OR jadwal = ''))")->result();
        $stogod = count($query);
        return $stogod; 

    }

    // HVC
    public function getHvcManOrdGod() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'ORDER' AND workzone = 'GOD')")->result();
        $order = count($query);
        return $order; 

    }
    public function getHvcManClsdGod() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'GOD')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getHvcManPndgGod() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'PENDING' AND workzone = 'GOD')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    //TTR 3 JAM
    public function getHvcNonManOrdGod() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'ORDER' AND workzone = 'GOD')")->result();
        $order = count($query);
        return $order; 

    }
    public function getHvcNonManClsdGod() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'GOD')")->result();
        $closed = count($query);
        return $closed ; 

    }
    public function getHvcNonManPndgGod() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'PENDING' AND workzone = 'GOD')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // REPORTDATE
    public function getTtrManOrdGod() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'ORDER' AND workzone = 'GOD')")->result();
        $order = count($query);
        return $order; 

    }
    public function getTtrManClsdGod() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'GOD')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getTtrManPndgGod() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'PENDING' AND workzone = 'GOD')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // LOGIC
    public function getTtrNonManOrdGod() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'ORDER' AND workzone = 'GOD')")->result();
        $order = count($query);
        return $order; 

    }
    public function getTtrNonManClsdGod() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'GOD')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getTtrNonManPndgGod() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'PENDING' AND workzone = 'GOD')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // REGULAR
    public function getRgrOrdGod() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'ORDER' AND workzone = 'GOD')")->result();
        $order = count($query);
        return $order; 

    }
    public function getRgrClsdGod() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'GOD')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getRgrPndgGod() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'PENDING' AND workzone = 'GOD')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // SQM
    public function getSqmOrdGod() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'ORDER' AND workzone = 'GOD')")->result();
        $order = count($query);
        return $order; 

    }
    public function getSqmClsdGod() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'GOD')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getSqmPndgGod() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'PENDING' AND workzone = 'GOD')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // INFRACARE
    public function getInfraOrdGod() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'ORDER' AND workzone = 'GOD')")->result();
        $order = count($query);
        return $order; 

    }
    public function getInfraClsdGod() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'GOD')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getInfraPndgGod() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'PENDING' AND workzone = 'GOD')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // BLANK
    public function getBlnkGod() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (status_tiket = '' AND workzone = 'GOD')")->result();
        $blank = count($query);
        return $blank; 
      }


      /////////////////////////////////////////////////////////////

      //////////////////PKM//////////////////
      // TEKNISI
    public function getTekAsPkm() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sto = 'PKM' AND jadwal = 'MASUK')")->result();
        $stopkm = count($query);
        return $stopkm; 

    }
    public function getTekAcPkm() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sto = 'PKM' AND (jadwal = 'LIBUR' OR jadwal = ''))")->result();
        $stopkm = count($query);
        return $stopkm; 

    }

    // HVC
    public function getHvcManOrdPkm() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'ORDER' AND workzone = 'PKM')")->result();
        $order = count($query);
        return $order; 

    }
    public function getHvcManClsdPkm() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'PKM')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getHvcManPndgPkm() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'PENDING' AND workzone = 'PKM')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    //TTR 3 JAM
    public function getHvcNonManOrdPkm() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'ORDER' AND workzone = 'PKM')")->result();
        $order = count($query);
        return $order; 

    }
    public function getHvcNonManClsdPkm() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'PKM')")->result();
        $closed = count($query);
        return $closed ; 

    }
    public function getHvcNonManPndgPkm() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'PENDING' AND workzone = 'PKM')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // REPORTDATE
    public function getTtrManOrdPkm() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'ORDER' AND workzone = 'PKM')")->result();
        $order = count($query);
        return $order; 

    }
    public function getTtrManClsdPkm() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'PKM')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getTtrManPndgPkm() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'PENDING' AND workzone = 'PKM')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // LOGIC
    public function getTtrNonManOrdPkm() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'ORDER' AND workzone = 'PKM')")->result();
        $order = count($query);
        return $order; 

    }
    public function getTtrNonManClsdPkm() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'PKM')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getTtrNonManPndgPkm() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'PENDING' AND workzone = 'PKM')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // REGULAR
    public function getRgrOrdPkm() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'ORDER' AND workzone = 'PKM')")->result();
        $order = count($query);
        return $order; 

    }
    public function getRgrClsdPkm() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'PKM')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getRgrPndgPkm() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'PENDING' AND workzone = 'PKM')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // SQM
    public function getSqmOrdPkm() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'ORDER' AND workzone = 'PKM')")->result();
        $order = count($query);
        return $order; 

    }
    public function getSqmClsdPkm() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'PKM')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getSqmPndgPkm() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'PENDING' AND workzone = 'PKM')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // INFRACARE
    public function getInfraOrdPkm() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'ORDER' AND workzone = 'PKM')")->result();
        $order = count($query);
        return $order; 

    }
    public function getInfraClsdPkm() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'PKM')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getInfraPndgPkm() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'PENDING' AND workzone = 'PKM')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // BLANK
    public function getBlnkPkm() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (status_tiket = '' AND workzone = 'PKM')")->result();
        $blank = count($query);
        return $blank; 
      }
      

    // KLS
    // TEKNISI
    public function getTekAsKls() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sto = 'KLS' AND jadwal = 'MASUK')")->result();
        $stokbu = count($query);
        return $stokbu; 

    }
    public function getTekAcKls() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sto = 'KLS' AND (jadwal = 'LIBUR' OR jadwal = ''))")->result();
        $stokbu = count($query);
        return $stokbu; 

    }

    // HVC
    public function getHvcManOrdKls() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'ORDER' AND workzone = 'KLS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getHvcManClsdKls() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'KLS')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getHvcManPndgKls() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'PENDING' AND workzone = 'KLS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    //TTR 3 JAM
    public function getHvcNonManOrdKls() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'ORDER' AND workzone = 'KLS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getHvcNonManClsdKls() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'KLS')")->result();
        $closed = count($query);
        return $closed ; 

    }
    public function getHvcNonManPndgKls() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'PENDING' AND workzone = 'KLS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // REPORTDATE
    public function getTtrManOrdKls() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'ORDER' AND workzone = 'KLS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getTtrManClsdKls() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'KLS')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getTtrManPndgKls() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'PENDING' AND workzone = 'KLS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // LOGIC
    public function getTtrNonManOrdKls() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'ORDER' AND workzone = 'KLS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getTtrNonManClsdKls() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'KLS')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getTtrNonManPndgKls() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'PENDING' AND workzone = 'KLS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // REGULAR
    public function getRgrOrdKls() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'ORDER' AND workzone = 'KLS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getRgrClsdKls() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'KLS')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getRgrPndgKls() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'PENDING' AND workzone = 'KLS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // SQM
    public function getSqmOrdKls() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'ORDER' AND workzone = 'KLS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getSqmClsdKls() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'KLS')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getSqmPndgKls() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'PENDING' AND workzone = 'KLS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // INFRACARE
    public function getInfraOrdKls() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'ORDER' AND workzone = 'KLS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getInfraClsdKls() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'KLS')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getInfraPndgKls() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'PENDING' AND workzone = 'KLS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // BLANK
    public function getBlnkKls() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (status_tiket = '' AND workzone = 'KLS')")->result();
        $blank = count($query);
        return $blank; 

    }


    // KGD/BPN
    // TEKNISI
    public function getTekAsKgd() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE ((sto = 'KGD' OR sto = 'BPN') AND jadwal = 'MASUK')")->result();
        $stokbu = count($query);
        return $stokbu; 

    }
    public function getTekAcKgd() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE ((sto = 'KGD' OR sto = 'BPN') AND (jadwal = 'LIBUR' OR jadwal = ''))")->result();
        $stokbu = count($query);
        return $stokbu; 

    }

    // HVC
    public function getHvcManOrdKgd() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'ORDER' AND (workzone = 'KGD' OR workzone = 'BPN'))")->result();
        $order = count($query);
        return $order; 

    }
    public function getHvcManClsdKgd() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND (workzone = 'KGD' OR workzone = 'BPN'))")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getHvcManPndgKgd() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'PENDING' AND (workzone = 'KGD' OR workzone = 'BPN'))")->result();
        $pending = count($query);
        return $pending; 

    }
    
    //TTR 3 JAM
    public function getHvcNonManOrdKgd() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'ORDER' AND (workzone = 'KGD' OR workzone = 'BPN'))")->result();
        $order = count($query);
        return $order; 

    }
    public function getHvcNonManClsdKgd() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND (workzone = 'KGD' OR workzone = 'BPN'))")->result();
        $closed = count($query);
        return $closed ; 

    }
    public function getHvcNonManPndgKgd() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'PENDING' AND (workzone = 'KGD' OR workzone = 'BPN'))")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // REPORTDATE
    public function getTtrManOrdKgd() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'ORDER' AND (workzone = 'KGD' OR workzone = 'BPN'))")->result();
        $order = count($query);
        return $order; 

    }
    public function getTtrManClsdKgd() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND (workzone = 'KGD' OR workzone = 'BPN'))")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getTtrManPndgKgd() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'PENDING' AND (workzone = 'KGD' OR workzone = 'BPN'))")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // LOGIC
    public function getTtrNonManOrdKgd() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'ORDER' AND (workzone = 'KGD' OR workzone = 'BPN'))")->result();
        $order = count($query);
        return $order; 

    }
    public function getTtrNonManClsdKgd() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND (workzone = 'KGD' OR workzone = 'BPN'))")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getTtrNonManPndgKgd() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'PENDING' AND (workzone = 'KGD' OR workzone = 'BPN'))")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // REGULAR
    public function getRgrOrdKgd() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'ORDER' AND (workzone = 'KGD' OR workzone = 'BPN'))")->result();
        $order = count($query);
        return $order; 

    }
    public function getRgrClsdKgd() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND (workzone = 'KGD' OR workzone = 'BPN'))")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getRgrPndgKgd() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'PENDING' AND (workzone = 'KGD' OR workzone = 'BPN'))")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // SQM
    public function getSqmOrdKgd() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'ORDER' AND (workzone = 'KGD' OR workzone = 'BPN'))")->result();
        $order = count($query);
        return $order; 

    }
    public function getSqmClsdKgd() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND (workzone = 'KGD' OR workzone = 'BPN'))")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getSqmPndgKgd() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'PENDING' AND (workzone = 'KGD' OR workzone = 'BPN'))")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // INFRACARE
    public function getInfraOrdKgd() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'ORDER' AND (workzone = 'KGD' OR workzone = 'BPN'))")->result();
        $order = count($query);
        return $order; 

    }
    public function getInfraClsdKgd() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND (workzone = 'KGD' OR workzone = 'BPN'))")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getInfraPndgKgd() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'PENDING' AND (workzone = 'KGD' OR workzone = 'BPN'))")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // BLANK
    public function getBlnkKgd() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (status_tiket = '' AND (workzone = 'KGD' OR workzone = 'BPN'))")->result();
        $blank = count($query);
        return $blank; 

    }

    
    // BBS
    // TEKNISI
    public function getTekAsBbs() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sto = 'BBS' AND jadwal = 'MASUK')")->result();
        $stokbu = count($query);
        return $stokbu; 

    }
    public function getTekAcBbs() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sto = 'BBS' AND (jadwal = 'LIBUR' OR jadwal = ''))")->result();
        $stokbu = count($query);
        return $stokbu; 

    }

    // HVC
    public function getHvcManOrdBbs() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'ORDER' AND workzone = 'BBS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getHvcManClsdBbs() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'BBS')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getHvcManPndgBbs() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'PENDING' AND workzone = 'BBS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    //TTR 3 JAM
    public function getHvcNonManOrdBbs() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'ORDER' AND workzone = 'BBS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getHvcNonManClsdBbs() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'BBS')")->result();
        $closed = count($query);
        return $closed ; 

    }
    public function getHvcNonManPndgBbs() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'PENDING' AND workzone = 'BBS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // REPORTDATE
    public function getTtrManOrdBbs() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'ORDER' AND workzone = 'BBS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getTtrManClsdBbs() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'BBS')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getTtrManPndgBbs() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'PENDING' AND workzone = 'BBS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // LOGIC
    public function getTtrNonManOrdBbs() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'ORDER' AND workzone = 'BBS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getTtrNonManClsdBbs() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'BBS')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getTtrNonManPndgBbs() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'PENDING' AND workzone = 'BBS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // REGULAR
    public function getRgrOrdBbs() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'ORDER' AND workzone = 'BBS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getRgrClsdBbs() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'BBS')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getRgrPndgBbs() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'PENDING' AND workzone = 'BBS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // SQM
    public function getSqmOrdBbs() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'ORDER' AND workzone = 'BBS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getSqmClsdBbs() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'BBS')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getSqmPndgBbs() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'PENDING' AND workzone = 'BBS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // INFRACARE
    public function getInfraOrdBbs() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'ORDER' AND workzone = 'BBS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getInfraClsdBbs() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'BBS')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getInfraPndgBbs() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'PENDING' AND workzone = 'BBS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // BLANK
    public function getBlnkBbs() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (status_tiket = '' AND workzone = 'BBS')")->result();
        $blank = count($query);
        return $blank; 

    }


    // KEN
    // TEKNISI
    public function getTekAsKen() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sto = 'KEN' AND jadwal = 'MASUK')")->result();
        $stokbu = count($query);
        return $stokbu; 

    }
    public function getTekAcKen() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sto = 'KEN' AND (jadwal = 'LIBUR' OR jadwal = ''))")->result();
        $stokbu = count($query);
        return $stokbu; 

    }

    // HVC
    public function getHvcManOrdKen() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'ORDER' AND workzone = 'KEN')")->result();
        $order = count($query);
        return $order; 

    }
    public function getHvcManClsdKen() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'KEN')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getHvcManPndgKen() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'PENDING' AND workzone = 'KEN')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    //TTR 3 JAM
    public function getHvcNonManOrdKen() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'ORDER' AND workzone = 'KEN')")->result();
        $order = count($query);
        return $order; 

    }
    public function getHvcNonManClsdKen() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'KEN')")->result();
        $closed = count($query);
        return $closed ; 

    }
    public function getHvcNonManPndgKen() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'PENDING' AND workzone = 'KEN')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // REPORTDATE
    public function getTtrManOrdKen() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'ORDER' AND workzone = 'KEN')")->result();
        $order = count($query);
        return $order; 

    }
    public function getTtrManClsdKen() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'KEN')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getTtrManPndgKen() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'PENDING' AND workzone = 'KEN')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // LOGIC
    public function getTtrNonManOrdKen() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'ORDER' AND workzone = 'KEN')")->result();
        $order = count($query);
        return $order; 

    }
    public function getTtrNonManClsdKen() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'KEN')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getTtrNonManPndgKen() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'PENDING' AND workzone = 'KEN')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // REGULAR
    public function getRgrOrdKen() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'ORDER' AND workzone = 'KEN')")->result();
        $order = count($query);
        return $order; 

    }
    public function getRgrClsdKen() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'KEN')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getRgrPndgKen() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'PENDING' AND workzone = 'KEN')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // SQM
    public function getSqmOrdKen() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'ORDER' AND workzone = 'KEN')")->result();
        $order = count($query);
        return $order; 

    }
    public function getSqmClsdKen() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'KEN')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getSqmPndgKen() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'PENDING' AND workzone = 'KEN')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // INFRACARE
    public function getInfraOrdKen() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'ORDER' AND workzone = 'KEN')")->result();
        $order = count($query);
        return $order; 

    }
    public function getInfraClsdKen() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'KEN')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getInfraPndgKen() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'PENDING' AND workzone = 'KEN')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // BLANK
    public function getBlnkKen() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (status_tiket = '' AND workzone = 'KEN')")->result();
        $blank = count($query);
        return $blank; 

    }

    

    // PGR
    // TEKNISI
    public function getTekAsPgr() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sto = 'PGR' AND jadwal = 'MASUK')")->result();
        $stokbu = count($query);
        return $stokbu; 

    }
    public function getTekAcPgr() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sto = 'PGR' AND (jadwal = 'LIBUR' OR jadwal = ''))")->result();
        $stokbu = count($query);
        return $stokbu; 

    }

    // HVC
    public function getHvcManOrdPgr() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'ORDER' AND workzone = 'PGR')")->result();
        $order = count($query);
        return $order; 

    }
    public function getHvcManClsdPgr() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'PGR')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getHvcManPndgPgr() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'PENDING' AND workzone = 'PGR')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    //TTR 3 JAM
    public function getHvcNonManOrdPgr() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'ORDER' AND workzone = 'PGR')")->result();
        $order = count($query);
        return $order; 

    }
    public function getHvcNonManClsdPgr() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'PGR')")->result();
        $closed = count($query);
        return $closed ; 

    }
    public function getHvcNonManPndgPgr() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'PENDING' AND workzone = 'PGR')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // REPORTDATE
    public function getTtrManOrdPgr() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'ORDER' AND workzone = 'PGR')")->result();
        $order = count($query);
        return $order; 

    }
    public function getTtrManClsdPgr() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'PGR')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getTtrManPndgPgr() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'PENDING' AND workzone = 'PGR')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // LOGIC
    public function getTtrNonManOrdPgr() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'ORDER' AND workzone = 'PGR')")->result();
        $order = count($query);
        return $order; 

    }
    public function getTtrNonManClsdPgr() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'PGR')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getTtrNonManPndgPgr() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'PENDING' AND workzone = 'PGR')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // REGULAR
    public function getRgrOrdPgr() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'ORDER' AND workzone = 'PGR')")->result();
        $order = count($query);
        return $order; 

    }
    public function getRgrClsdPgr() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'PGR')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getRgrPndgPgr() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'PENDING' AND workzone = 'PGR')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // SQM
    public function getSqmOrdPgr() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'ORDER' AND workzone = 'PGR')")->result();
        $order = count($query);
        return $order; 

    }
    public function getSqmClsdPgr() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'PGR')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getSqmPndgPgr() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'PENDING' AND workzone = 'PGR')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // INFRACARE
    public function getInfraOrdPgr() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'ORDER' AND workzone = 'PGR')")->result();
        $order = count($query);
        return $order; 

    }
    public function getInfraClsdPgr() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'PGR')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getInfraPndgPgr() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'PENDING' AND workzone = 'PGR')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // BLANK
    public function getBlnkPgr() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (status_tiket = '' AND workzone = 'PGR')")->result();
        $blank = count($query);
        return $blank; 

    }


    
    // BTL
    // TEKNISI
    public function getTekAsBtl() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sto = 'BTL' AND jadwal = 'MASUK')")->result();
        $stokbu = count($query);
        return $stokbu; 

    }
    public function getTekAcBtl() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sto = 'BTL' AND (jadwal = 'LIBUR' OR jadwal = ''))")->result();
        $stokbu = count($query);
        return $stokbu; 

    }

    // HVC
    public function getHvcManOrdBtl() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'ORDER' AND workzone = 'BTL')")->result();
        $order = count($query);
        return $order; 

    }
    public function getHvcManClsdBtl() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'BTL')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getHvcManPndgBtl() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'PENDING' AND workzone = 'BTL')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    //TTR 3 JAM
    public function getHvcNonManOrdBtl() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'ORDER' AND workzone = 'BTL')")->result();
        $order = count($query);
        return $order; 

    }
    public function getHvcNonManClsdBtl() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'BTL')")->result();
        $closed = count($query);
        return $closed ; 

    }
    public function getHvcNonManPndgBtl() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'PENDING' AND workzone = 'BTL')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // REPORTDATE
    public function getTtrManOrdBtl() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'ORDER' AND workzone = 'BTL')")->result();
        $order = count($query);
        return $order; 

    }
    public function getTtrManClsdBtl() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'BTL')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getTtrManPndgBtl() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'PENDING' AND workzone = 'BTL')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // LOGIC
    public function getTtrNonManOrdBtl() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'ORDER' AND workzone = 'BTL')")->result();
        $order = count($query);
        return $order; 

    }
    public function getTtrNonManClsdBtl() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'BTL')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getTtrNonManPndgBtl() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'PENDING' AND workzone = 'BTL')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // REGULAR
    public function getRgrOrdBtl() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'ORDER' AND workzone = 'BTL')")->result();
        $order = count($query);
        return $order; 

    }
    public function getRgrClsdBtl() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'BTL')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getRgrPndgBtl() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'PENDING' AND workzone = 'BTL')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // SQM
    public function getSqmOrdBtl() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'ORDER' AND workzone = 'BTL')")->result();
        $order = count($query);
        return $order; 

    }
    public function getSqmClsdBtl() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'BTL')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getSqmPndgBtl() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'PENDING' AND workzone = 'BTL')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // INFRACARE
    public function getInfraOrdBtl() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'ORDER' AND workzone = 'BTL')")->result();
        $order = count($query);
        return $order; 

    }
    public function getInfraClsdBtl() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'BTL')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getInfraPndgBtl() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'PENDING' AND workzone = 'BTL')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // BLANK
    public function getBlnkBtl() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (status_tiket = '' AND workzone = 'BTL')")->result();
        $blank = count($query);
        return $blank; 

    }



    // WNS
    // TEKNISI
    public function getTekAsWns() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sto = 'WNS' AND jadwal = 'MASUK')")->result();
        $stokbu = count($query);
        return $stokbu; 

    }
    public function getTekAcWns() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sto = 'WNS' AND (jadwal = 'LIBUR' OR jadwal = ''))")->result();
        $stokbu = count($query);
        return $stokbu; 

    }

    // HVC
    public function getHvcManOrdWns() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'ORDER' AND workzone = 'WNS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getHvcManClsdWns() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'WNS')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getHvcManPndgWns() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'PENDING' AND workzone = 'WNS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    //TTR 3 JAM
    public function getHvcNonManOrdWns() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'ORDER' AND workzone = 'WNS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getHvcNonManClsdWns() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'WNS')")->result();
        $closed = count($query);
        return $closed ; 

    }
    public function getHvcNonManPndgWns() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'PENDING' AND workzone = 'WNS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // REPORTDATE
    public function getTtrManOrdWns() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'ORDER' AND workzone = 'WNS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getTtrManClsdWns() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'WNS')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getTtrManPndgWns() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'PENDING' AND workzone = 'WNS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // LOGIC
    public function getTtrNonManOrdWns() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'ORDER' AND workzone = 'WNS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getTtrNonManClsdWns() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'WNS')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getTtrNonManPndgWns() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'PENDING' AND workzone = 'WNS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // REGULAR
    public function getRgrOrdWns() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'ORDER' AND workzone = 'WNS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getRgrClsdWns() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'WNS')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getRgrPndgWns() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'PENDING' AND workzone = 'WNS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // SQM
    public function getSqmOrdWns() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'ORDER' AND workzone = 'WNS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getSqmClsdWns() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'WNS')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getSqmPndgWns() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'PENDING' AND workzone = 'WNS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // INFRACARE
    public function getInfraOrdWns() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'ORDER' AND workzone = 'WNS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getInfraClsdWns() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'WNS')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getInfraPndgWns() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'PENDING' AND workzone = 'WNS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // BLANK
    public function getBlnkWns() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (status_tiket = '' AND workzone = 'WNS')")->result();
        $blank = count($query);
        return $blank; 

    }



    // WTS
    // TEKNISI
    public function getTekAsWts() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sto = 'WTS' AND jadwal = 'MASUK')")->result();
        $stokbu = count($query);
        return $stokbu; 

    }
    public function getTekAcWts() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sto = 'WTS' AND (jadwal = 'LIBUR' OR jadwal = ''))")->result();
        $stokbu = count($query);
        return $stokbu; 

    }

    // HVC
    public function getHvcManOrdWts() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'ORDER' AND workzone = 'WTS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getHvcManClsdWts() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'WTS')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getHvcManPndgWts() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC MANJA'  AND status_tiket = 'PENDING' AND workzone = 'WTS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    //TTR 3 JAM
    public function getHvcNonManOrdWts() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'ORDER' AND workzone = 'WTS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getHvcNonManClsdWts() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'WTS')")->result();
        $closed = count($query);
        return $closed ; 

    }
    public function getHvcNonManPndgWts() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'HVC NON MANJA' AND status_tiket = 'PENDING' AND workzone = 'WTS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // REPORTDATE
    public function getTtrManOrdWts() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'ORDER' AND workzone = 'WTS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getTtrManClsdWts() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'WTS')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getTtrManPndgWts() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR MANJA' AND status_tiket = 'PENDING' AND workzone = 'WTS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // LOGIC
    public function getTtrNonManOrdWts() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'ORDER' AND workzone = 'WTS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getTtrNonManClsdWts() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'WTS')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getTtrNonManPndgWts() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'TTR NON MANJA' AND status_tiket = 'PENDING' AND workzone = 'WTS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // REGULAR
    public function getRgrOrdWts() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'ORDER' AND workzone = 'WTS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getRgrClsdWts() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'WTS')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getRgrPndgWts() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'REGULER' AND status_tiket = 'PENDING' AND workzone = 'WTS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // SQM
    public function getSqmOrdWts() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'ORDER' AND workzone = 'WTS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getSqmClsdWts() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'WTS')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getSqmPndgWts() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'SQM' AND status_tiket = 'PENDING' AND workzone = 'WTS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // INFRACARE
    public function getInfraOrdWts() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'ORDER' AND workzone = 'WTS')")->result();
        $order = count($query);
        return $order; 

    }
    public function getInfraClsdWts() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'CLOSED' AND date_update >= DATE(NOW()) AND workzone = 'WTS')")->result();
        $closed = count($query);
        return $closed; 

    }
    public function getInfraPndgWts() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (jenis_tiket = 'INFRACARE' AND status_tiket = 'PENDING' AND workzone = 'WTS')")->result();
        $pending = count($query);
        return $pending; 

    }
    
    // BLANK
    public function getBlnkWts() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (status_tiket = '' AND workzone = 'WTS')")->result();
        $blank = count($query);
        return $blank; 

    }



   // NAS
    public function getTtlNas() {
        
        $query = $this->db->query("SELECT * FROM nossa WHERE (workzone = 'NAS')")->result();
        $nas = count($query);
        return $nas; 

    }



}