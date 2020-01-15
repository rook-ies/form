<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('model_form');
    $this->load->model('model_place');
    //Codeigniter : Write Less Do More
    $this->load->model('model_tingkatKepuasanPelanggan');
    $this->load->model('model_tingkatKepuasanPelangganQuestion');
    $this->load->model('model_biayaQuestion');
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
     $data['place'] = $this->model_place->showPlace($data['form']['ID_PLACE']);
      
     $data['TingkatKepuasanPelanggan'] = $this->model_tingkatKepuasanPelanggan->listTingkatKepuasanPelanggan($this->uri->segment(3))->result();
     $i=0;
     foreach ($data['TingkatKepuasanPelanggan'] as $key) {
         if($i!=3){
             $data['data'][$i]['count'] = $this->model_tingkatKepuasanPelangganQuestion->countlistQuestion($key->ID_TKM);
             echo "find questi where id tkm = ".$key->ID_TKM;
             $data['data'][$i]['question'] = $this->model_tingkatKepuasanPelangganQuestion->listQuestion($key->ID_TKM)->result();
        }else {
            $data['data'][$i]['non_bayar']['count'] = $this->model_biayaQuestion->countlistQuestion($this->uri->segment(3),1);
            $data['data'][$i]['non_bayar']['question'] = $this->model_biayaQuestion->listQuestion($this->uri->segment(3),1)->result();
            $data['data'][$i]['bayar']['count'] = $this->model_biayaQuestion->countlistQuestion($this->uri->segment(3),2);
            $data['data'][$i]['bayar']['question'] = $this->model_biayaQuestion->listQuestion($this->uri->segment(3),2)->result();
            echo "jumlah non bayar".$data['data'][$i]['non_bayar']['count'];
            echo "jumlah bayar".$data['data'][$i]['bayar']['count'];
        }
        $i++;
    }
     print_r($data);
     $this->load->view('template/Header');
     $this->load->view('form/Header',$data);



     $this->load->view('form/TingkatKepuasanPelanggan',$data);
     $this->load->view('form/PrioritasAspekPelayanan',$data);
     $this->load->view('form/Footer');
     $this->load->view('template/Footer');
  }

  public function simpan()
  {

      echo "bab2";
      ///// bab 2 /////
      $jumlahBab = $this->input->post('TKMjumlahBab');
      echo "jumlah bab".$jumlahBab."-----";
      for ($i=0; $i < $jumlahBab ; $i++) {
          if($i!=3){
              echo "<br>";
              $jumlahPertanyaan[$i] = $this->input->post('TKMjumlahQuestion'.$i);
              for ($j=0; $j <$jumlahPertanyaan[$i] ; $j++) {
                  echo $this->input->post('TKManswer'.$i.$j);
              }
          } else {
              $pilihan = $this->input->post('TKMpilihanBayar');
              if($pilihan==1){
                  //echo "<br>memilih non bayar";
                  $jumlahBayar = $this->input->post('TKMjumlahQuestionNonBayar');
                   for ($j=0; $j <$jumlahBayar ; $j++) {
                       echo $this->input->post('TKManswerNonbayar'.$i.$j);
                   }
              }else {
                  //echo "<br>memilih bayar";
                  $jumlahBayar = $this->input->post('TKMjumlahQuestionBayar');
                  for ($j=0; $j <$jumlahBayar ; $j++) {
                      echo $this->input->post('TKManswerBayar'.$i.$j);
                  }
              }
          }
      }
      // echo $count;
      echo "bab5";
      //// bab 5 ////
      for ($i=0; $i < $jumlahBab ; $i++) {
          echo "<br>";
          echo $this->input->post('nilaiPrioritas'.$i);
      }
  }

}
