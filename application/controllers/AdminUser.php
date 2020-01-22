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
  public function gantiPassword()
  {
      $data['title'] = "Ganti password";

      $this->load->view('AdminUser/template/header', $data);
      $this->load->view('AdminUser/gantiPassword', $data);
      $this->load->view('AdminUser/template/footer', $data);

  }

  public function SavePassword()
  {
      $data['title'] = "ganti Password";

      $this->form_validation->set_rules('oldPassword', 'Old Password', 'required');
      $this->form_validation->set_rules('newPassword', 'Password', 'required');
      $this->form_validation->set_rules('newPasswordConfirmation', 'Password Confirmation', 'required');


      $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('messagePassword', 'Harap isi dengan Benar');
            redirect('AdminUser/gantiPassword');
        }
        else
        {
            $password = $this->security->xss_clean($this->input->post('oldPassword'));
            $newpassword = $this->security->xss_clean($this->input->post('newPassword'));
            $newCpassword = $this->security->xss_clean($this->input->post('newPasswordConfirmation'));
            // echo "<br>".sha1($password);
            // echo "<br>".sha1($newpassword);
            // echo "<br>".sha1($newCpassword);
            // echo "<br>".$this->session->password;
            if(sha1($password) != $this->session->password){
                $this->session->set_flashdata('messagePassword', 'Password lama salah');
                redirect('AdminUser/gantiPassword');
                //echo "lama salah";
            }
            else if($newpassword != $newCpassword){
                $this->session->set_flashdata('messagePassword', 'Password konfirmasi salah');
                // echo "baru gak sama";
                redirect('AdminUser/gantiPassword');
            } else {
                $this->session->set_flashdata('messagePasswordSusscess', 'Berhasil Mengganti Password');

                $params = array(
					'PASSWORD' => sha1($newpassword)
                );

                $this->Model_admin->update_admin($this->session->id_admin,$params);
                $this->session->password = sha1($newpassword);

                redirect('AdminUser/gantiPassword');
            }
        }
  }

}
