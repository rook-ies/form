<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboardAdminBiasa extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
        $this->load->model('Model_form');
        $this->load->model('Model_submit');
        $this->load->model('Model_identity_answer');
        $this->load->model('Model_additional_identity_answer');
        $this->load->model('Model_tkm_answer');
        $this->load->model('Model_experience');
        $this->load->model('Model_form_detail');
        $this->logged_in();
    }

      private function logged_in() {
        if(! $this->session->userdata('authenticated')) {
            redirect('AdminUser/login');
        }
    }

    public function index()
    {
        $data['title'] = "Dashboard";
        $data['form'] = $this->Model_form->get_all_form_per_place($this->session->id_place);

        $this->load->view('AdminUser/template/header', $data);
        $this->load->view('AdminUser/dashboard', $data);
        $this->load->view('AdminUser/template/footer', $data);
    }

    public function submit(){
      $data['submit'] = $this->Model_submit->get_submit_form($this->uri->segment(3))->result_array();
      $data['title'] = 'Submit';
      $this->load->view('AdminUser/template/header', $data);
      $this->load->view('AdminUser/submit/index', $data);
      $this->load->view('AdminUser/template/footer', $data);
    }

    public function submitDetail(){
      //$data['identityAnswer'] = $this->Model_identity_answer->get_identity_answer_persubmit($this->uri->segment(3))->result_array();
      $data['additional_identity_answer'] = $this->Model_additional_identity_answer->get_additional_identity_answer_persubmit($this->uri->segment(3))->result_array();
      $data['tkm_answer'] = $this->Model_tkm_answer->get_tkm_answer_persubmit($this->uri->segment(3))->result_array();
      $data['experience'] = $this->Model_experience->get_experience_persubmit($this->uri->segment(3))->result_array();
      $data['form_detail'] = $this->Model_form_detail->get_form_detail_persubmit($this->uri->segment(3))->result_array();

      $data['title'] = 'Submit detail';
      $this->load->view('AdminUser/template/header', $data);
      $data['title'] = 'Form detail';
      $this->load->view('AdminUser/form_detail/index',$data);
      //$this->load->view('AdminUser/identity_answer/index', $data);
      $data['title'] = 'Additional identity answer';
      $this->load->view('AdminUser/additional_identity_answer/index', $data);

      $data['title'] = 'TKM answer';
      $this->load->view('AdminUser/tkm_answer/index', $data);
      $data['title'] = 'Experince';
      $this->load->view('AdminUser/experience/index',$data);
      $this->load->view('AdminUser/template/footer', $data);
    }
}
