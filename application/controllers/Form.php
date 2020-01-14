<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
      echo "string";
      $this->load->model('model_form');
      $data['forms'] = $this->model_form->listForm()->result();
      print_r($data['forms']);
  }

}
