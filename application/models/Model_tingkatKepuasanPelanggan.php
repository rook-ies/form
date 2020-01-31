<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_tingkatKepuasanPelanggan extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function listTingkatKepuasanPelanggan($idForm)
  {
      $tkm =  $this->db->get_where("TKM",array('ID_FORM'=> $idForm));
      return $tkm;
  }

  public function showForm($id){
      $form =  $this->db->get_where("FORM",array('id_form'=> $id));
      $i=0;
      return $form;
  }

}
