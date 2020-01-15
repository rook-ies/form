<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_biayaQuestion extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function countlistQuestion($idForm,$tipeBayar)
  {
      $this->db->where('ID_FORM',$idForm);
      $this->db->where('ID_TIPE_BAYAR',$tipeBayar);
      $this->db->from("BIAYA_QUESTION");
      $count = $this->db->count_all_results();
      return $count;
  }

  public function listQuestion($idForm,$tipeBayar)
  {
      $this->db->where('ID_FORM',$idForm);
      $this->db->where('ID_TIPE_BAYAR',$tipeBayar);
      $this->db->from("BIAYA_QUESTION");
      $question = $this->db->get();
      return $question;
  }

}
