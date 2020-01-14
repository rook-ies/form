<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_form extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function listForm()
  {
      $forms = $this->db->get("FORM");
      return $forms;
  }

}
