<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_tingkatKepuasanPelangganQuestion extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function countlistQuestion($idTKM)
  {
      $this->db->where('ID_TKM',$idTKM);
      $this->db->from("TKM_QUESTION");
      $count = $this->db->count_all_results();
      return $count;
  }
  public function listQuestion($idTKM)
  {
      $question = $this->db->get_where('TKM_QUESTION',array('ID_TKM'=>$idTKM));
      return $question;
  }

}
