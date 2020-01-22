<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminUser extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Model_admin');
  }

  private function logged_in()
  {
      if( ! $this->session->userdata('authenticated')){
          $this->login();
          //echo "belum login";
      }
  }

  public function login()
  {
      $data['title'] = "Login";

      $this->form_validation->set_rules('password', 'email', 'trim|required');
      $this->form_validation->set_rules('password', 'password', 'required');

      $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

      if($this->form_validation->run() == false){
          //$this->load->view('superAdmin/template/header', $data);
          $this->load->view('AdminUser/login', $data);
          //$this->load->view('superAdmin/template/footer', $data);
      }
      else {
          $email = $this->security->xss_clean($this->input->post('email'));
          $password = $this->security->xss_clean($this->input->post('password'));
          echo $email;
          echo $password;
          $user = $this->Model_admin->login($email, $password);
          print_r($user);
          if($user){
              $this->load->model('Model_place');
              $namaPlace = $this->Model_place->get_place($user->ID_PLACE);
              $userdata = array(
                  'id_admin' => $user->ID_ADMIN,
                  'id_place' => $user->ID_PLACE,
                  'name_place' => $namaPlace['NAMA'],
                  'name' => $user->NAMA,
                  'email' => $user->EMAIL,
                  'password' => $user->PASSWORD,
                  'authenticated' => TRUE
              );

              $this->session->set_userdata($userdata);
              //echo "bisa login";
              redirect('dashboardAdminBiasa');
          }
          else {
              $this->session->set_flashdata('message', 'Invalid email or password');
              redirect('AdminUser/login');
              //echo "gabisa login";
          }
      }
  }

  public function logout()
  {
      $this->session->sess_destroy();
      //redirect('users/login');
      //echo "bisa logout";
      redirect('AdminUser/login');
  }

}
