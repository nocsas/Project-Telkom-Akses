<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Leader_model extends CI_Model {

    private $_leader = "leader";



    public $id;

    public $sto;

    public $sektor;

    public $nama;



    public function rules() {

        return[



            ['field' => 'id',

            'label' => 'Id',

            'rules' => ''],



            ['field' => 'sto',

            'label' => 'STO',

            'rules' => ''],



            ['field' => 'sektor',

            'label' => 'Sektor',

            'rules' => 'required'],



            ['field' => 'nama',

            'label' => 'Nama',

            'rules' => 'required']



        ];

    }



    public function getAll() {

        return $this->db->get($this->_leader)->result();

    }



    public function getById($id) {

        return $this->db->get_where($this->_leader, ["id" => $id])->row();

    }


    public function getTekArea($area) {
	
	return $this->db->query("SELECT * FROM teknisi WHERE (sektor = '$area') ORDER BY jadwal DESC")->result();
// 	return $this->db->query("SELECT * FROM teknisi WHERE (sektor = '$area' OR sektor = 'HD') ORDER BY jadwal DESC")->result();


    }
    
    public function getTekAreaMenuEdit($area) {
	
	return $this->db->query("SELECT * FROM teknisi WHERE (sektor = '$area' AND jadwal = 'MASUK') OR sektor = 'HD' ORDER BY jadwal DESC")->result();
// 	return $this->db->query("SELECT * FROM teknisi WHERE (sektor = '$area' OR sektor = 'HD') ORDER BY jadwal DESC")->result();


    }
    
    public function getTekTotalArea($area) {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sektor = '$area')")->result();
        $hitung = count($query);
        return $hitung; 

    }
    public function getTekTotalAll() {
        
        $query = $this->db->query("SELECT * FROM teknisi")->result();
        $hitung = count($query);
        return $hitung; 

    }

    public function getTekMasukArea($area) {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sektor = '$area' AND jadwal = 'MASUK')")->result();
        $hitung = count($query);
        return $hitung; 

    }

    public function getTekMasukAll() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (jadwal = 'MASUK')")->result();
        $hitung = count($query);
        return $hitung; 

    }

    public function getTekLiburArea($area) {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sektor = '$area' AND jadwal = 'LIBUR')")->result();
        $hitung = count($query);
        return $hitung; 

    }

    public function getTekLiburAll() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (jadwal = 'LIBUR')")->result();
        $hitung = count($query);
        return $hitung; 

    }

    public function getTlKbu() {
        
        return $query = $this->db->query("SELECT * FROM leader WHERE (sto = 'KBU')")->result();

    }
    
    public function getTlSmn() {
        
        return $query = $this->db->query("SELECT * FROM leader WHERE (sto = 'SMN')")->result();

    }
    
    public function getTlGod() {
        
        return $query = $this->db->query("SELECT * FROM leader WHERE (sto = 'GOD')")->result();

    }
    
    public function getTlPkm() {
        
        return $query = $this->db->query("SELECT * FROM leader WHERE (sto = 'PKM')")->result();

    }
    
    public function getTlKls() {
        
        return $query = $this->db->query("SELECT * FROM leader WHERE (sto = 'KLS')")->result();

    }
    
    public function getTlKgd() {
        
        return $query = $this->db->query("SELECT * FROM leader WHERE (sto = 'KGD')")->result();

    }
    
    public function getTlBbs() {
        
        return $query = $this->db->query("SELECT * FROM leader WHERE (sto = 'BBS')")->result();

    }
    
    public function getTlKen() {
        
        return $query = $this->db->query("SELECT * FROM leader WHERE (sto = 'KEN')")->result();

    }
    
    public function getTlPgr() {
        
        return $query = $this->db->query("SELECT * FROM leader WHERE (sto = 'PGR')")->result();

    }
    
    public function getTlBtl() {
        
        return $query = $this->db->query("SELECT * FROM leader WHERE (sto = 'BTL')")->result();

    }
    
    public function getTlWns() {
        
        return $query = $this->db->query("SELECT * FROM leader WHERE (sto = 'WNS')")->result();

    }
    
    public function getTlWts() {
        
        return $query = $this->db->query("SELECT * FROM leader WHERE (sto = 'WTS')")->result();

    }





    public function save() {

        $post = $this->input->post();


        $this->sto      = $post["sto"];

        $this->sektor   = $post["sektor"];

        $this->nama     = $post["nama"];

        return $this->db->insert($this->_leader, $this);

    }



    public function update() {

        $post = $this->input->post();

        $this->id       = $post["id"];

        $this->sto      = $post["sto"];

        $this->sektor   = $post["sektor"];

        $this->nama     = $post["nama"];


        return $this->db->update($this->_leader, $this, array('id' => $post["id"]));

    }



    public function delete($id)

    {

        return $this->db->delete($this->_leader, array("id" => $id));

    }



}