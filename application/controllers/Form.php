<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('model_form');
    $this->load->model('model_place');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
      echo "string";
      $data['forms'] = $this->model_form->listForm()->result();
      print_r($data['forms']);
  }

  function show(){
     $data['form'] = $this->model_form->showForm($this->uri->segment(3))->row_array();
     $data['place'] = $this->model_place->showPlace($data['form']['ID_PLACE']);
      
     $this->load->view('template/Header');
     $this->load->view('form/Header',$data);




     $this->load->view('form/Footer');
     $this->load->view('template/Footer');
  }

}
