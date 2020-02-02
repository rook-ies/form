<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardAdmin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
        $this->logged_in();
    }

      private function logged_in() {
        if(! $this->session->userdata('authenticated')) {
            redirect('superAdmin/login');
        }
    }

    public function index()
    {
        $data['title'] = "Dashboard";

        $this->load->view('superAdmin/template/header', $data);
        $this->load->view('superAdmin/dashboard', $data);
        $this->load->view('superAdmin/template/footer', $data);
    }

}
