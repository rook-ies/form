<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_place extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function showPlace($idPlace){
    $place = $this->db->select('p.NAMA, pt.TYPE,pc.CATEGORY')
          ->from('PLACE AS p, PLACE_TYPE AS pt,PLACE_CATEGORY AS pc')
          ->where('p.ID_PLACE_TYPE = pt.ID_PLACE_TYPE')
          ->where('p.ID_PLACE_CATEGORY = pc.ID_PLACE_CATEGORY')
          ->where('p.ID_PLACE', $idPlace);
    $place = $this->db->get();
    //$place=  $this->db->get_where("PLACE",array('ID_PLACE'=> $idPlace));
    $resultp = $place->row_array();

    return $resultp;
  }


}
