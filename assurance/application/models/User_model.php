<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    private $_user = "user";

    public $id;
    public $nama;
    public $username;
    public $password;
    public $area;
    public $sektor;
    public $role_id;


    public function delete($id)
    {
        return $this->db->delete($this->_user, array("id" => $id));
    }

}