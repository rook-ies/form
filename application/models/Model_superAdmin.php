<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_superAdmin extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function login($email, $password)
    {
        $this->db->where('USERNAME', $email);
        $this->db->where('PASSWORD', sha1($password));
        $query = $this->db->get('SUPERADMIN');

        if($query->num_rows() == 1) {
            return $query->row();
        }

        return false;
    }

}
