<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mockupAdmin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('mockup/Admin/login');
  }
  function dashboard()
  {
      $this->load->view('mockup/Admin/template/header');
      $this->load->view('mockup/Admin/dashboard');
      $this->load->view('mockup/Admin/template/footer');
  }
  function gantiPassword()
  {
      $this->load->view('mockup/Admin/template/header');
      $this->load->view('mockup/Admin/gantiPassword');
      $this->load->view('mockup/Admin/template/footer');
  }
  function listform()
  {
      $this->load->view('mockup/Admin/template/header');
      $this->load->view('mockup/Admin/form/listForm');
      $this->load->view('mockup/Admin/template/footer');
  }
  function addform()
  {
      $this->load->view('mockup/Admin/template/header');
      $this->load->view('mockup/Admin/form/addform');
      $this->load->view('mockup/Admin/template/footer');
  }
  function editform()
  {
      $this->load->view('mockup/Admin/template/header');
      $this->load->view('mockup/Admin/form/editform');
      $this->load->view('mockup/Admin/template/footer');
  }
  function editIdentityQuestion()
  {
      $this->load->view('mockup/Admin/template/header');
      $this->load->view('mockup/Admin/form/editIdentityQuestion');
      $this->load->view('mockup/Admin/template/footer');
  }
  function editIdentityOption()
  {
      $this->load->view('mockup/Admin/template/header');
      $this->load->view('mockup/Admin/form/editIdentityOption');
      $this->load->view('mockup/Admin/template/footer');
  }
  function editTKMQuestion()
  {
      $this->load->view('mockup/Admin/template/header');
      $this->load->view('mockup/Admin/form/editTKMQuestion');
      $this->load->view('mockup/Admin/template/footer');
  }
  function editTKMQuestionBayar()
  {
      $this->load->view('mockup/Admin/template/header');
      $this->load->view('mockup/Admin/form/editTKMQuestionBayar');
      $this->load->view('mockup/Admin/template/footer');
  }
  function editTKMQuestionSub()
  {
      $this->load->view('mockup/Admin/template/header');
      $this->load->view('mockup/Admin/form/editTKMQuestionSub');
      $this->load->view('mockup/Admin/template/footer');
  }
  function editTKMQuestionBayarSub()
  {
      $this->load->view('mockup/Admin/template/header');
      $this->load->view('mockup/Admin/form/editTKMQuestionBayarSub');
      $this->load->view('mockup/Admin/template/footer');
  }
  function reviewForm()
  {
      $this->load->view('mockup/Admin/template/header');
      $this->load->view('mockup/Admin/form/reviewForm');
      $this->load->view('mockup/Admin/template/footer');
  }
  function detailSubmit()
  {
      $this->load->view('mockup/Admin/template/header');
      $this->load->view('mockup/Admin/form/detailSubmit');
      $this->load->view('mockup/Admin/template/footer');
  }
}
