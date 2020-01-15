<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_place_type extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function showPlaceType($idPlaceType){
    $placeType=  $this->db->get_where("PLACE_TYPE",array('ID_PLACE_TYPE'=> $idPlaceType));

    return $placeType;
  }

}
