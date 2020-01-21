<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_service_type extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function showService($idForm){
    $service = $this->db->select('s.SERVICE_TYPE')
          ->from('FORM AS f, SERVICE_TYPE AS s')
          ->where('f.ID_SERVICE_TYPE = s.ID_SERVICE_TYPE')
          ->where('f.ID_FORM', $idForm);
    $service = $this->db->get();

    return $service;
  }

}
