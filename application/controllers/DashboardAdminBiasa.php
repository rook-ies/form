<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardAdminBiasa extends CI_Controller{

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
        $this->load->model('Model_tingkatKepuasanPelanggan');
        $this->logged_in();
    }

      private function logged_in() {
        if(! $this->session->userdata('authenticated')) {
            redirect(site_url('AdminUser/login'));
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
      // $data['submit'] = $this->Model_submit->get_submit_form($this->uri->segment(3))->result_array();
      $this->session->currentForm = $this->uri->segment(3);
      $jumlah_data = $this->Model_submit->jumlah_data($this->uri->segment(3));
      $config['base_url'] = base_url().'index.php/dashboardAdminBiasa/submit/'.$this->uri->segment(3);
	  $config['total_rows'] = $jumlah_data;
	  $config['per_page'] = 10;
	  $from = $this->uri->segment(4);
	  $this->pagination->initialize($config);

      $data['submit'] = $this->Model_submit->data($this->uri->segment(3),$config['per_page'],$from)->result_array();
      $data['title'] = 'Submit';
      $data['titleForm'] = $this->Model_form->showForm($this->uri->segment(3))->row_array();

      $data['tkm'] =      $data['TingkatKepuasanPelanggan'] = $this->Model_tingkatKepuasanPelanggan->listTingkatKepuasanPelanggan($this->uri->segment(3))->result();

      // print_r($data['tkm']);
      $i=0;
      $data['chart'][0]['TKM'] = "";
      $data['chart'][0]['PRIORITY'] = "";
      $data['chart'][0]['QUESTION'] = "";
      foreach ($data['tkm'] as $key) {
          // echo "<br>id TKM".$key->QUESTION.' =>>>';
          $num = $this->Model_tkm_answer->get_tkm_answer_per_tkm($key->ID_TKM)->result_array();
          // print_r($num);
          $sum=0;
          $sum2=0;
          $j=0;
          foreach ($num as $key2) {
              // echo $key2['VALUE']." + ";
              $sum+=$key2['VALUE'];
              $sum2+=$key2['PRIORITY'];
              $j++;
          }
          // echo " = ".$sum;
          // echo " >>>> ". $sum/$j;
          $hitungan['QUESTION'] = $key->QUESTION;
          if($j!=0){
              $hitungan['TKM'] = $sum/$j;
              $hitungan['PRIORITY'] = $sum2/$j;
          }else{
              $hitungan['TKM'] = 0;
              $hitungan['PRIORITY'] = 1;
          }

          $data['chart'][$i] = $hitungan;
          // $data['chart'] = $hitungan;
          // $data['chart']['TKM'][$i] = $sum/$j;
          // $data['chart']['PRIORITY'][$i] = $sum/$j;
          $i++;
      }
      // print_r($data['chart']);

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
      $data['title'] = 'Identitas';
      $this->load->view('AdminUser/additional_identity_answer/index', $data);

      $data['title'] = 'TKM answer';
      $this->load->view('AdminUser/tkm_answer/index', $data);
      $data['title'] = 'Experince';
      $this->load->view('AdminUser/experience/index',$data);
      $this->load->view('AdminUser/template/footer', $data);
    }
}
