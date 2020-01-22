<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboardAdminBiasa extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
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

        $this->load->view('AdminUser/template/header', $data);
        $this->load->view('AdminUser/dashboard', $data);
        $this->load->view('AdminUser/template/footer', $data);
    }

}
