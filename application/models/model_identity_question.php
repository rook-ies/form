<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_identity_question extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function listQuestion(){
     $identityQuestion = $this->db->get("IDENTITY_QUESTION");

     return $identityQuestion;
  }

  public function listOption($idQuestion){
    $identityOption = $this->db->get_where('IDENTITY_OPTION',array('ID_IDENTITY_QUESTION'=>$idQuestion));

     return $identityOption;
  }

}
