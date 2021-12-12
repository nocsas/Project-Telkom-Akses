<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Crew_model extends CI_Model {

    private $_crew = "teknisi";



    public $id;

    public $crew;

    public $nama;

    public $sto;

    public $sektor;

    public $jadwal;



    public function rules() {

        return[



            ['field' => 'id',

            'label' => 'Id',

            'rules' => ''],



            ['field' => 'crew',

            'label' => 'Crew',

            'rules' => ''],



            ['field' => 'nama',

            'label' => 'Nama',

            'rules' => 'required'],



            ['field' => 'sto',

            'label' => 'Sto',

            'rules' => 'required'],



            ['field' => 'sektor',

            'label' => 'Sektor',

            'rules' => 'required'],



            ['field' => 'jadwal',

            'label' => 'Jadwal',

            'rules' => '']



        ];

    }



    public function getAll() {

        return $this->db->get($this->_crew)->result();

    }



    public function getById($id) {

        return $this->db->get_where($this->_crew, ["id" => $id])->row();

    }


    public function getTekArea($area) {
	
// 	return $this->db->query("SELECT * FROM teknisi WHERE (sektor = '$area' AND jadwal = 'MASUK') ORDER BY jadwal DESC")->result();
	return $this->db->query("SELECT * FROM teknisi WHERE (sektor = '$area' OR sektor = 'HD') ORDER BY jadwal DESC")->result();


    }
    
    public function getTekAreaMenuEdit($area) {
	
	return $this->db->query("SELECT * FROM teknisi WHERE (sektor = '$area' AND jadwal = 'MASUK') ORDER BY jadwal DESC")->result();
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
    public function getTekIjinArea($area) {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (sektor = '$area' AND jadwal = 'IJIN')")->result();
        $hitung = count($query);
        return $hitung; 

    }

    public function getTekIjinAll() {
        
        $query = $this->db->query("SELECT * FROM teknisi WHERE (jadwal = 'IJIN')")->result();
        $hitung = count($query);
        return $hitung; 

    }





    public function save() {

        $post = $this->input->post();



        $this->crew     = $post["crew"];

        $this->nama     = $post["nama"];

        $this->sto      = $post["sto"];

        $this->sektor   = $post["sektor"];

        $this->jadwal   = $post["jadwal"];

        return $this->db->insert($this->_crew, $this);

    }



    public function update() {

        $post = $this->input->post();

        $this->id       = $post["id"];

        $this->crew     = $post["crew"];

        $this->nama     = $post["nama"];

        $this->sto      = $post["sto"];

        $this->sektor   = $post["sektor"];

        $this->jadwal   = $post["jadwal"];

        return $this->db->update($this->_crew, $this, array('id' => $post["id"]));

    }



    public function delete($id)

    {

        return $this->db->delete($this->_crew, array("id" => $id));

    }



}