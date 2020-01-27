<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mockupSuperAdmin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('mockup/superAdmin/login');
  }

  function dashboard(){
      $this->load->view('mockup/superAdmin/template/header');
      $this->load->view('mockup/superAdmin/dashboard');
      $this->load->view('mockup/superAdmin/template/footer');
  }
  function admin(){
      $this->load->view('mockup/superAdmin/template/header');
      $this->load->view('mockup/superAdmin/admin/index');
      $this->load->view('mockup/superAdmin/template/footer');
  }
  function adminAdd()
  {
      $this->load->view('mockup/superAdmin/template/header');
      $this->load->view('mockup/superAdmin/admin/add');
      $this->load->view('mockup/superAdmin/template/footer');
  }
  function adminEdit()
  {
      $this->load->view('mockup/superAdmin/template/header');
      $this->load->view('mockup/superAdmin/admin/edit');
      $this->load->view('mockup/superAdmin/template/footer');
  }

}
