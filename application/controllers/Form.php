<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('model_form');
    $this->load->model('model_place');
    $this->load->model('model_identity_question');
    $this->load->model('model_additional_identity');
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

     $data['identityQuestion'] = $this->model_identity_question->listQuestion()->result();
     //$data['identityOption'] = $this->model_identity_question->listOption()->result();
     $options = 0;
     foreach ($data['identityQuestion'] as $iq) {
       $data['identity'][$options]['count'] = $this->model_identity_question->countOption($iq->ID_IDENTITY_QUESTION);
       $data['identity'][$options]['option'] = $this->model_identity_question->listOption($iq->ID_IDENTITY_QUESTION)->result();
       $options++;
     }
     $data['additionalIdentityQuestion'] = $this->model_additional_identity->listQuestion($this->uri->segment(3))->result();

     $additionalOptions = 0;
     foreach ($data['additionalIdentityQuestion'] as $aiq) {
       $data['additionalIdentityOption'][$additionalOptions]['count'] = $this->model_additional_identity->countOption($aiq->ID_ADDITIONAL_IDENTITY_QUESTION);
       echo "count ".$additionalOptions."=".$data['additionalIdentityOption'][$additionalOptions]['count'];
       $data['additionalIdentityOption'][$additionalOptions]['option'] = $this->model_additional_identity->listOption($aiq->ID_ADDITIONAL_IDENTITY_QUESTION)->result();
       $additionalOptions++;
     }

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
     $this->load->view('form/Identitas',$data);
     $this->load->view('form/AdditionalIdentity',$data);


     $this->load->view('form/TingkatKepuasanPelanggan',$data);
     $this->load->view('form/Experience');
      $this->load->view('form/Harapan');
     $this->load->view('form/PrioritasAspekPelayanan',$data);
     $this->load->view('form/Footer');
     $this->load->view('template/Footer');
  }

  public function simpan()
  {
      echo "header";
      echo "<br>".$this->input->post('noResponden');
      echo "<br>".$this->input->post('kodeSurveyor');
      echo "<br>".$this->input->post('unitPelayanan');

      echo "Identitas";
      $jumlahIdentitas = $this->input->post('jumlahIdentitas');
      for ($i=0; $i < $jumlahIdentitas ; $i++) {
        echo "<br>";
        if($this->input->post('identity'.$i) == 'lainnya'){
          echo $this->input->post('pekerjaanLainnya');
        }

        else{
          echo $this->input->post('identity'.$i);
        }
      }

      echo "Identitas tambahan";
      $jumlahIdentitasTambahan = $this->input->post('jumlahIdentitasTambahan');
      for ($i=0; $i < $jumlahIdentitas ; $i++) {
        echo "<br>";
        if($this->input->post('additionalIdentityAnswer'.$i) == 'lainnya'){
          echo $this->input->post('additionalLainnya');
        }
        else{
          echo $this->input->post('additionalIdentityAnswer'.$i);
        }
      }
      echo "<br>bab2";

      ///// bab 2 /////
      $jumlahBab = $this->input->post('TKMjumlahBab');
      $indk = $this->input->post('indeksBayar');
      echo "indek bayar".$indk;
      // echo "jumlah bab".$jumlahBab."-----";
      for ($i=0; $i < $jumlahBab ; $i++) {
          $avg=0;
          $pembagi=0;
          echo "<br>";
          if($i!=$indk){
              $jumlahPertanyaan[$i] = $this->input->post('TKMjumlahQuestion'.$i);
              for ($j=0; $j <$jumlahPertanyaan[$i] ; $j++) {
                  echo $this->input->post('TKManswer'.$i.$j);
                  $avg+=$this->input->post('TKManswer'.$i.$j);
                  $pembagi++;
              }
          } else {
              $pilihan = $this->input->post('TKMpilihanBayar');
              if($pilihan==1){
                  //echo "<br>memilih non bayar";
                  $jumlahBayar = $this->input->post('TKMjumlahQuestionNonBayar');
                   for ($j=0; $j <$jumlahBayar ; $j++) {
                       echo $this->input->post('TKManswerNonbayar'.$i.$j);
                       $avg+=$this->input->post('TKManswerNonbayar'.$i.$j);
                       $pembagi++;
                   }
              }else {
                  //echo "<br>memilih bayar";
                  $jumlahBayar = $this->input->post('TKMjumlahQuestionBayar');
                  for ($j=0; $j <$jumlahBayar ; $j++) {
                      echo $this->input->post('TKManswerBayar'.$i.$j);
                      $avg+=$this->input->post('TKManswerBayar'.$i.$j);
                      $pembagi++;
                  }
              }
          }
          $avg = $avg/$pembagi;
          echo "rata rata : >".$avg."<";
      }
      echo "bab 3";
      echo "<br>".$this->input->post('penglaman');
      echo "<br>".$this->input->post('pengalamanTidakMenyenangkan');
      echo "<br>".$this->input->post('location');
      echo "<br>".$this->input->post('waktu');

      echo "bab4";
      echo "<br>".$this->input->post('harapanUnit');
      echo "<br>".$this->input->post('harapanPlace');
      // echo $count;
      echo "<br>bab5";
      //// bab 5 ////
      for ($i=0; $i < $jumlahBab ; $i++) {
          echo "<br>";
          echo $this->input->post('nilaiPrioritas'.$i);
      }
  }

}
