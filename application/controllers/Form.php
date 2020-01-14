<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('model_form');
    //Codeigniter : Write Less Do More
    $this->load->model('model_tingkatKepuasanPelanggan');
    $this->load->model('model_tingkatKepuasanPelangganQuestion');
  }

  function index()
  {
      //echo "string";
      $data['forms'] = $this->model_form->listForm()->result();
      //print_r($data['forms']);
      $this->load->view('template/Header');
      $this->load->view('pages/listForm',$data);
      $this->load->view('template/Footer');
  }

  function show(){
     $data['form'] = $this->model_form->showForm($this->uri->segment(3))->row_array();
     $data['TingkatKepuasanPelanggan'] = $this->model_tingkatKepuasanPelanggan->listTingkatKepuasanPelanggan($this->uri->segment(3))->result();
     $i=0;
     foreach ($data['TingkatKepuasanPelanggan'] as $key) {
         $data['data'][$i]['count'] = $this->model_tingkatKepuasanPelangganQuestion->countlistQuestion($key->ID_TKM);
         echo "find questi where id tkm = ".$key->ID_TKM;
         $data['data'][$i]['question'] = $this->model_tingkatKepuasanPelangganQuestion->listQuestion($key->ID_TKM)->result();
         $i++;
     }
     print_r($data);
     $this->load->view('template/Header');
     $this->load->view('form/Header',$data);



     $this->load->view('form/TingkatKepuasanPelanggan',$data);
     $this->load->view('form/Footer');
     $this->load->view('template/Footer');
  }

  public function simpan()
  {

      ///// bab 2 /////
      $jumlahBab = $this->input->post('jumlahBab');
      echo "jumlah bab".$jumlahBab."-----";
      for ($i=0; $i < $jumlahBab ; $i++) {
          echo "<br>";
          $jumlahPertanyaan[$i] = $this->input->post('jumlahQuestion'.$i);
          for ($j=0; $j <$jumlahPertanyaan[$i] ; $j++) {
              echo $this->input->post('answer'.$i.$j);
          }
      }
      // echo $count;

  }

}
