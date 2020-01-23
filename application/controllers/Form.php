<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('Model_form');
    $this->load->model('Model_place');
    $this->load->model('Model_identity_question');
    $this->load->model('Model_additional_identity');
    $this->load->model('Model_service_type');
    //Codeigniter : Write Less Do More
    $this->load->model('Model_tingkatKepuasanPelanggan');
    $this->load->model('Model_tingkatKepuasanPelangganQuestion');
    $this->load->model('Model_biaya_question');
  }

  function index()
  {
      $data['form'] = $this->Model_form->get_all_form();

      $data['title'] = 'Form';
      $data['_view'] = 'form/index';

      $this->load->view('AdminUser/template/header',$data);
      $this->load->view('AdminUser/form/index',$data);
      $this->load->view('AdminUser/template/footer',$data);
  }


  function show(){
     $data['form'] = $this->Model_form->showForm($this->uri->segment(3))->row_array();
     $data['place'] = $this->Model_place->showPlace($data['form']['ID_PLACE']);

     $data['identityQuestion'] = $this->Model_identity_question->listQuestion()->result();
     //$data['identityOption'] = $this->Model_identity_question->listOption()->result();
     $options = 0;
     foreach ($data['identityQuestion'] as $iq) {
       $data['identity'][$options]['count'] = $this->Model_identity_question->countOption($iq->ID_IDENTITY_QUESTION);
       $data['identity'][$options]['option'] = $this->Model_identity_question->listOption($iq->ID_IDENTITY_QUESTION)->result();
       $options++;
     }
     $data['additionalIdentityQuestion'] = $this->Model_additional_identity->listQuestion($this->uri->segment(3))->result();

     $additionalOptions = 0;
     foreach ($data['additionalIdentityQuestion'] as $aiq) {
       $data['additionalIdentityOption'][$additionalOptions]['count'] = $this->Model_additional_identity->countOption($aiq->ID_ADDITIONAL_IDENTITY_QUESTION);
       echo "count ".$additionalOptions."=".$data['additionalIdentityOption'][$additionalOptions]['count'];
       $data['additionalIdentityOption'][$additionalOptions]['option'] = $this->Model_additional_identity->listOption($aiq->ID_ADDITIONAL_IDENTITY_QUESTION)->result();
       $additionalOptions++;
     }

     $data['TingkatKepuasanPelanggan'] = $this->Model_tingkatKepuasanPelanggan->listTingkatKepuasanPelanggan($this->uri->segment(3))->result();
     $i=0;
     foreach ($data['TingkatKepuasanPelanggan'] as $key) {
         if($i!=3){
             $data['data'][$i]['count'] = $this->Model_tingkatKepuasanPelangganQuestion->countlistQuestion($key->ID_TKM);
             echo "find questi where id tkm = ".$key->ID_TKM;
             $data['data'][$i]['question'] = $this->Model_tingkatKepuasanPelangganQuestion->listQuestion($key->ID_TKM)->result();
        }else {
            $data['data'][$i]['non_bayar']['count'] = $this->Model_biaya_question->countlistQuestion($this->uri->segment(3),1);
            $data['data'][$i]['non_bayar']['question'] = $this->Model_biaya_question->listQuestion($this->uri->segment(3),1)->result();
            $data['data'][$i]['bayar']['count'] = $this->Model_biaya_question->countlistQuestion($this->uri->segment(3),2);
            $data['data'][$i]['bayar']['question'] = $this->Model_biaya_question->listQuestion($this->uri->segment(3),2)->result();
            echo "jumlah non bayar".$data['data'][$i]['non_bayar']['count'];
            echo "jumlah bayar".$data['data'][$i]['bayar']['count'];
        }
        $i++;
    }
    $data['service'] = $this->Model_service_type->showService($this->uri->segment(3))->row_array();

     print_r($data);
     $this->load->view('template/Header');
     $this->load->view('form/Header',$data);
     $this->load->view('form/Identitas',$data);
     $this->load->view('form/AdditionalIdentity',$data);


     $this->load->view('form/TingkatKepuasanPelanggan',$data);
     $this->load->view('form/Experience');
      $this->load->view('form/Harapan',$data);
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

  function add()
  {
      $this->load->library('form_validation');

	$this->form_validation->set_rules('TITLE','TITLE','required|max_length[1024]');
	$this->form_validation->set_rules('DESCRIPTION','DESCRIPTION','required|max_length[1024]');
	$this->form_validation->set_rules('ID_PLACE','ID PLACE','required');
	$this->form_validation->set_rules('ID_SERVICE_TYPE','ID SERVICE TYPE','required');

	if($this->form_validation->run())
      {
          $params = array(
			'ID_PLACE' => $this->input->post('ID_PLACE'),
			'ID_SERVICE_TYPE' => $this->input->post('ID_SERVICE_TYPE'),
			'TITLE' => $this->input->post('TITLE'),
			'DESCRIPTION' => $this->input->post('DESCRIPTION'),
          );

          $form_id = $this->Model_form->add_form($params);
          redirect('form/index');
      }
      else
      {
  		$this->load->model('Model_place');
  		$data['all_place'] = $this->Model_place->get_all_place();

  		$this->load->model('Model_service_type');
  		$data['all_service_type'] = $this->Model_service_type->get_all_service_type();

          $data['title'] = 'Add form';
          $data['_view'] = 'form/add';
          $this->load->view('AdminUser/template/header',$data);
          $this->load->view('AdminUser/form/add',$data);
          $this->load->view('AdminUser/template/footer',$data);
      }
  }

  /*
   * Editing a form
   */
  function edit($ID_FORM)
  {
      // check if the form exists before trying to edit it
      $data['form'] = $this->Model_form->get_form($ID_FORM);

      if(isset($data['form']['ID_FORM']))
      {
          $this->load->library('form_validation');

		$this->form_validation->set_rules('TITLE','TITLE','required|max_length[1024]');
		$this->form_validation->set_rules('DESCRIPTION','DESCRIPTION','required|max_length[1024]');
		$this->form_validation->set_rules('ID_PLACE','ID PLACE','required');
		$this->form_validation->set_rules('ID_SERVICE_TYPE','ID SERVICE TYPE','required');

		if($this->form_validation->run())
          {
              $params = array(
				'ID_PLACE' => $this->input->post('ID_PLACE'),
				'ID_SERVICE_TYPE' => $this->input->post('ID_SERVICE_TYPE'),
				'TITLE' => $this->input->post('TITLE'),
				'DESCRIPTION' => $this->input->post('DESCRIPTION'),
              );

              $this->Model_form->update_form($ID_FORM,$params);
              redirect('form/index');
          }
          else
          {
			$this->load->model('Model_place');
			$data['all_place'] = $this->Model_place->get_all_place();

			$this->load->model('Model_service_type');
			$data['all_service_type'] = $this->Model_service_type->get_all_service_type();

              $data['title'] = 'Edit form';
              $data['_view'] = 'form/edit';

              $this->load->view('AdminUser/template/header',$data);
              $this->load->view('AdminUser/form/edit',$data);
              $this->load->view('AdminUser/template/footer',$data);
          }
      }
      else
          show_error('The form you are trying to edit does not exist.');
  }

  /*
   * Deleting form
   */
  function remove($ID_FORM)
  {
      $form = $this->Model_form->get_form($ID_FORM);

      // check if the form exists before trying to delete it
      if(isset($form['ID_FORM']))
      {
          $this->Model_form->delete_form($ID_FORM);
          redirect('form/index');
      }
      else
          show_error('The form you are trying to delete does not exist.');
  }
}
