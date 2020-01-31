<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller{

    public function __construct(){
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
        $this->load->model('Model_identity_answer');
        $this->load->model('Model_submit');
        $this->load->model('Model_additional_identity_answer');
        $this->load->model('Model_tkm_answer');
        $this->load->model('Model_experience');
        $this->load->model('Model_form_detail');
        $this->load->model('Model_priority');
    // $this->logged_in();
    }

    private function logged_in() {
        if(! $this->session->userdata('authenticated')) {
            redirect('AdminUser/login');
        }
    }

    public function listTempat() {
        $data['place'] = $this->Model_place->get_all_place();

        $data['title'] = 'Place';
        $data['_view'] = 'place/index';
        // $this->load->view('SuperAdmin/template/header',$data);
        $this->load->view('form/listTempat',$data);
        // $this->load->view('SuperAdmin/template/footer',$data);
    }

    function index(){
        $data['form'] = $this->Model_form->get_all_form();
        //$data['form'] = $this->Model_form->getFormPerPlace($this->session->id_place)->row_array();

        $data['title'] = 'Form';
        $data['_view'] = 'form/index';

        $this->load->view('AdminUser/template/header',$data);
        $this->load->view('AdminUser/form/index',$data);
        $this->load->view('AdminUser/template/footer',$data);
    }

    function listForm(){
        $data['form'] = $this->Model_form->get_all_form_per_place($this->uri->segment(3));
        //$data['form'] = $this->Model_form->getFormPerPlace($this->session->id_place)->row_array();

        $data['title'] = 'Form';
        $data['_view'] = 'form/index';
        // print_r($data['form']);
        // $this->load->view('AdminUser/template/header',$data);
        $this->load->view('form/listForm',$data);
        // $this->load->view('AdminUser/template/footer',$data);
    }

    function list(){
        $data['form'] = $this->Model_form->get_all_form_per_place($this->session->id_place);
        //$data['form'] = $this->Model_form->getFormPerPlace($this->session->id_place)->row_array();

        $data['title'] = 'Form';
        $data['_view'] = 'form/index';
        // print_r($data['form']);
        $this->load->view('AdminUser/template/header',$data);
        $this->load->view('AdminUser/form/index',$data);
        $this->load->view('AdminUser/template/footer',$data);
    }


    function show(){
        $data['form'] = $this->Model_form->showForm($this->uri->segment(3))->row_array();
        $data['place'] = $this->Model_place->showPlace($data['form']['ID_PLACE']);

     // $data['identityQuestion'] = $this->Model_identity_question->listQuestion()->result();
     // //$data['identityOption'] = $this->Model_identity_question->listOption()->result();
     // $options = 0;
     // foreach ($data['identityQuestion'] as $iq) {
     //   $data['identity'][$options]['count'] = $this->Model_identity_question->countOption($iq->ID_IDENTITY_QUESTION);
     //   $data['identity'][$options]['option'] = $this->Model_identity_question->listOption($iq->ID_IDENTITY_QUESTION)->result();
     //   $options++;
     // }
        $data['additionalIdentityQuestion'] = $this->Model_additional_identity->listQuestion($this->uri->segment(3))->result();

        $additionalOptions = 0;
        foreach ($data['additionalIdentityQuestion'] as $aiq) {
            $data['additionalIdentityOption'][$additionalOptions]['count'] = $this->Model_additional_identity->countOption($aiq->ID_ADDITIONAL_IDENTITY_QUESTION);
            // echo "count ".$additionalOptions."=".$data['additionalIdentityOption'][$additionalOptions]['count'];
            $data['additionalIdentityOption'][$additionalOptions]['option'] = $this->Model_additional_identity->listOption($aiq->ID_ADDITIONAL_IDENTITY_QUESTION)->result();
            $additionalOptions++;
        }

        $data['TingkatKepuasanPelanggan'] = $this->Model_tingkatKepuasanPelanggan->listTingkatKepuasanPelanggan($this->uri->segment(3))->result();
        $i=0;
        foreach ($data['TingkatKepuasanPelanggan'] as $key) {
            if($key->QUESTION!='BIAYA/TARIF'){
                 $data['data'][$i]['count'] = $this->Model_tingkatKepuasanPelangganQuestion->countlistQuestion($key->ID_TKM);
                 // echo "find questi where id tkm = ".$key->ID_TKM;
                 $data['data'][$i]['question'] = $this->Model_tingkatKepuasanPelangganQuestion->listQuestion($key->ID_TKM)->result();
            }else {
                $data['data'][$i]['non_bayar']['count'] = $this->Model_biaya_question->countlistQuestion($this->uri->segment(3),1);
                $data['data'][$i]['non_bayar']['question'] = $this->Model_biaya_question->listQuestion($this->uri->segment(3),1)->result();
                $data['data'][$i]['bayar']['count'] = $this->Model_biaya_question->countlistQuestion($this->uri->segment(3),2);
                $data['data'][$i]['bayar']['question'] = $this->Model_biaya_question->listQuestion($this->uri->segment(3),2)->result();
                // echo "jumlah non bayar".$data['data'][$i]['non_bayar']['count'];
                // echo "jumlah bayar".$data['data'][$i]['bayar']['count'];
            }
            $i++;
        }
        $data['service'] = $this->Model_service_type->showService($this->uri->segment(3))->row_array();

        // print_r($data);
        $this->load->view('template/Header');
        $this->load->view('form/Header',$data);
        //$this->load->view('form/Identitas',$data);
        $this->load->view('form/AdditionalIdentity',$data);


        $this->load->view('form/TingkatKepuasanPelanggan',$data);
        $this->load->view('form/Experience');
        $this->load->view('form/Harapan',$data);
        $this->load->view('form/PrioritasAspekPelayanan',$data);
        $this->load->view('form/Footer');
        $this->load->view('template/Footer');
    }

    public function simpan(){
    // $data['form'] = $this->Model_form->get_all_form_per_place($this->session->id_place);
    // $this->load->library('form_validation');
    //
    // $this->form_validation->set_rules('identity0','TYPE','max_length[1024]|required');
    // $this->form_validation->set_rules('identity1','NAME','max_length[255]|required');
    // $this->form_validation->set_rules('identity2','ADDRESS','max_length[255]|required');
    // $this->form_validation->set_rules('identity3','NO HP','max_length[255]|required');
    // $this->form_validation->set_rules('identity4','AGE','max_length[255]|required');
    // $this->form_validation->set_rules('identity5','GENDER','max_length[255]|required');
    // $this->form_validation->set_rules('identity6','EDUCATION','max_length[255]|required');
    // $this->form_validation->set_rules('identity7','JOB','required|max_length[255]');
    //
    // if($this->form_validation->run())
    //   {
    //       if($this->input->post('identity7') == 'lainnya'){
    //         $jobField = $this->input->post('pekerjaanLainnya');
    //       }
    //       else{
    //         $jobField = $this->input->post('identity7');
    //       }
    //
    //       $params = array(
    //       'TYPE' => $this->input->post('identity0'),
    //       'NAME'  => $this->input->post('identity1'),
    //       'ADDRESS' => $this->input->post('identity2'),
    //       'NO_HP' => $this->input->post('identity3'),
    //       'AGE' => $this->input->post('identity4'),
    //       'GENDER' => $this->input->post('identity5'),
    //       'EDUCATION' => $this->input->post('identity6'),
    //       'JOB' => $jobField,
    //       );
    //
    //       $identity_answer_id = $this->Model_identity_answer->add_identity_answer($params);
    //       //redirect('identity_answer/index');
    //   }
    //   else
    //   {
    //       echo validation_errors();
    //       $data['_view'] = 'identity_answer/add';
    //       //$this->load->view('layouts/main',$data);
    //   }

        echo "<br>";
        echo "submit";
        //submit
        $this->form_validation->set_rules('harapanUnit','UNIT EXPECTANCY','required|max_length[1024]');
        $this->form_validation->set_rules('harapanPlace','PLACE EXPECTANCY','required|max_length[1024]');
        $this->form_validation->set_rules('idForm','ID FORM','required');

        for ($j=0; $j < $this->input->post('jumlahIdentitasTambahan'); $j++) {
            $this->form_validation->set_rules('additionalIdentityAnswer'.$j,'VALUE','required|max_length[255]');
    		//$this->form_validation->set_rules($submit_id,'ID SUBMIT','required');
    		$this->form_validation->set_rules('idAdditionalQuestion'.$j,'ID ADDITIONAL IDENTITY QUESTION','required');
        }

        if($this->input->post('pengalaman') == 'iya'){
              // $this->form_validation->set_rules($submit_id,'ID SUBMIT','required');
      		$this->form_validation->set_rules('pengalamanTidakMenyenangkan','UNPLEASANT EXPERIENCE','required|max_length[1024]');
      		$this->form_validation->set_rules('location','LOCATION','required|max_length[255]');
      		$this->form_validation->set_rules('tanggal','TIME','required');
        }
        // $this->form_validation->set_rules($submit_id,'ID SUBMIT','required');
  		$this->form_validation->set_rules('noResponden','NO RESPONDEN','required');
  		$this->form_validation->set_rules('kodeSurveyor','KODE SURVEYOR','required|max_length[255]');
  		$this->form_validation->set_rules('unitPelayanan','UNIT PELAYANAN','required|max_length[100]');
        $submit_id="";
  		if($this->form_validation->run()){
            $params = array(
                //'ID_IDENTITY_ANSWER' => $this->input->post('ID_IDENTITY_ANSWER'),
                'ID_FORM' => $this->input->post('idForm'),
                'UNIT_EXPECTANCY' => $this->input->post('harapanUnit'),
                'PLACE_EXPECTANCY' => $this->input->post('harapanPlace'),
                );

                $submit_id = $this->Model_submit->add_submit($params);
                for ($j=0; $j < $this->input->post('jumlahIdentitasTambahan'); $j++) {
                    $params = array(
                    'ID_SUBMIT' => $submit_id,
                    'ID_ADDITIONAL_IDENTITY_QUESTION' => $this->input->post('idAdditionalQuestion'.$j),
                    'VALUE' => $this->input->post('additionalIdentityAnswer'.$j),
                    );

                    $additional_identity_answer_id = $this->Model_additional_identity_answer->add_additional_identity_answer($params);
                }

                if($this->input->post('pengalaman') == 'iya'){
                    $params = array(
              				'ID_SUBMIT' => $submit_id,
              				'UNPLEASANT_EXPERIENCE' => $this->input->post('pengalamanTidakMenyenangkan'),
              				'LOCATION' => $this->input->post('location'),
              				'TIME' => $this->input->post('tanggal'),
                    );

                } else {
                    $params = array(
                      'ID_SUBMIT' => $submit_id,
                      'UNPLEASANT_EXPERIENCE' => "-----",
                      'LOCATION' => "-----",
                      'TIME' => "-----",
                    );
                }
                $experience_id = $this->Model_experience->add_experience($params);
// echo ">>>".$submit_id;
                $params = array(
        				'ID_SUBMIT' => $submit_id,
        				'NO_RESPONDEN' => $this->input->post('noResponden'),
        				'KODE_SURVEYOR' => $this->input->post('kodeSurveyor'),
        				'UNIT_PELAYANAN' => $this->input->post('unitPelayanan'),
                );

                $form_detail_id = $this->Model_form_detail->add_form_detail($params);

                $jumlahBab = $this->input->post('TKMjumlahBab');
                $indk = $this->input->post('indeksBayar');
                //echo "indek bayar".$indk;
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

                    $params = array(
              				'ID_SUBMIT' => $submit_id,
              				'ID_TKM' => $this->input->post('idTKM'.$i),
              				'VALUE' => $avg,
                      'PRIORITY' => $this->input->post('nilaiPrioritas'.$i),
                    );

                    $tkm_answer_id = $this->Model_tkm_answer->add_tkm_answer($params);
                    //redirect('tkm_answer/index');

                }
          } else {
              echo validation_errors();
              $data['_view'] = 'submit/add';
              echo "Harap isi semua data";
              //$this->load->view('layouts/main',$data);
          }

      // for ($j=0; $j < $this->input->post('jumlahIdentitasTambahan'); $j++) {
      // // additional identity0
      //       // $this->form_validation->set_rules('additionalIdentityAnswer'.$j,'VALUE','required|max_length[255]');
    	// 	// $this->form_validation->set_rules($submit_id,'ID SUBMIT','required');
    	// 	// $this->form_validation->set_rules('idAdditionalQuestion'.$j,'ID ADDITIONAL IDENTITY QUESTION','required');
      //
    	// 	if($this->form_validation->run())
      //       {
      //           $params = array(
      //           'ID_SUBMIT' => $submit_id,
      //           'ID_ADDITIONAL_IDENTITY_QUESTION' => $this->input->post('idAdditionalQuestion'.$j),
      //           'VALUE' => $this->input->post('additionalIdentityAnswer'.$j),
      //           );
      //
      //           $additional_identity_answer_id = $this->Model_additional_identity_answer->add_additional_identity_answer($params);
      //       }
      //   else
      //   {
      //       echo validation_errors();
      //       $data['_view'] = 'additional_identity_answer/add';
      //       //$this->load->view('layouts/main',$data);
      //   }
      // }

      //------------------------------TKM-----------------------------
      // $jumlahBab = $this->input->post('TKMjumlahBab');
      // $indk = $this->input->post('indeksBayar');
      // //echo "indek bayar".$indk;
      // // echo "jumlah bab".$jumlahBab."-----";
      // for ($i=0; $i < $jumlahBab ; $i++) {
      //     $avg=0;
      //     $pembagi=0;
      //     echo "<br>";
      //     if($i!=$indk){
      //         $jumlahPertanyaan[$i] = $this->input->post('TKMjumlahQuestion'.$i);
      //         for ($j=0; $j <$jumlahPertanyaan[$i] ; $j++) {
      //             echo $this->input->post('TKManswer'.$i.$j);
      //             $avg+=$this->input->post('TKManswer'.$i.$j);
      //             $pembagi++;
      //         }
      //     } else {
      //         $pilihan = $this->input->post('TKMpilihanBayar');
      //         if($pilihan==1){
      //             //echo "<br>memilih non bayar";
      //             $jumlahBayar = $this->input->post('TKMjumlahQuestionNonBayar');
      //              for ($j=0; $j <$jumlahBayar ; $j++) {
      //                  echo $this->input->post('TKManswerNonbayar'.$i.$j);
      //                  $avg+=$this->input->post('TKManswerNonbayar'.$i.$j);
      //                  $pembagi++;
      //              }
      //         }else {
      //             //echo "<br>memilih bayar";
      //             $jumlahBayar = $this->input->post('TKMjumlahQuestionBayar');
      //             for ($j=0; $j <$jumlahBayar ; $j++) {
      //                 echo $this->input->post('TKManswerBayar'.$i.$j);
      //                 $avg+=$this->input->post('TKManswerBayar'.$i.$j);
      //                 $pembagi++;
      //             }
      //         }
      //     }
      //     $avg = $avg/$pembagi;
      //     echo "rata rata : >".$avg."<";
      //
      //     $params = array(
    	// 			'ID_SUBMIT' => $submit_id,
    	// 			'ID_TKM' => $this->input->post('idTKM'.$i),
    	// 			'VALUE' => $avg,
      //       'PRIORITY' => $this->input->post('nilaiPrioritas'.$i),
      //     );
      //
      //     $tkm_answer_id = $this->Model_tkm_answer->add_tkm_answer($params);
      //     //redirect('tkm_answer/index');
      //
      // }

      // ------------------------------EXPERIENCE-----------------------------
      // if($this->input->post('pengalaman') == 'iya'){
      //       $this->form_validation->set_rules($submit_id,'ID SUBMIT','required');
    	// 	$this->form_validation->set_rules('pengalamanTidakMenyenangkan','UNPLEASANT EXPERIENCE','required|max_length[1024]');
    	// 	$this->form_validation->set_rules('location','LOCATION','required|max_length[255]');
    	// 	$this->form_validation->set_rules('tanggal','TIME','required');
      //
    	// 	if($this->form_validation->run())
      //       {
      //           $params = array(
      //     				'ID_SUBMIT' => $submit_id,
      //     				'UNPLEASANT_EXPERIENCE' => $this->input->post('pengalamanTidakMenyenangkan'),
      //     				'LOCATION' => $this->input->post('location'),
      //     				'TIME' => $this->input->post('tanggal'),
      //           );
      //
      //           $experience_id = $this->Model_experience->add_experience($params);
      //           //redirect('experience/index');
      //       }
      //     else
      //     {
      //         echo validation_errors();
      //         $data['_view'] = 'experience/add';
      //         //$this->load->view('layouts/main',$data);
      //     }
      // }
      // else{
      //     $params = array(
      //       'ID_SUBMIT' => $submit_id,
      //       'UNPLEASANT_EXPERIENCE' => "-----",
      //       'LOCATION' => "-----",
      //       'TIME' => "-----",
      //     );
      //
      //     $experience_id = $this->Model_experience->add_experience($params);
      // }

       //----------------------------------------PRIORITAS-------------------------------
        // for ($i=0; $i < $this->input->post('jumlahTKM') ; $i++) {
        //   $params = array(
        //     'VALUE' => $this->input->post('nilaiPrioritas'.$i),
        //     'ID_TKM' => $this->input->post('idTKM2'.$i),
        //     'ID_SUBMIT' => $submit_id,
        //   );
        //
        //   $priority_id = $this->Model_priority->add_priority($params);
        // }

      // //-----------------------------FORM DETAIL------------------------------------
        // $this->form_validation->set_rules($submit_id,'ID SUBMIT','required');
  		// $this->form_validation->set_rules('noResponden','NO RESPONDEN','required|integer');
  		// $this->form_validation->set_rules('kodeSurveyor','KODE SURVEYOR','required|max_length[255]');
  		// $this->form_validation->set_rules('unitPelayanan','UNIT PELAYANAN','required|max_length[100]');
        //
  		// if($this->form_validation->run())
        // {
        //     $params = array(
    	// 			'ID_SUBMIT' => $submit_id,
    	// 			'NO_RESPONDEN' => $this->input->post('noResponden'),
    	// 			'KODE_SURVEYOR' => $this->input->post('kodeSurveyor'),
    	// 			'UNIT_PELAYANAN' => $this->input->post('unitPelayanan'),
        //     );
        //
        //     $form_detail_id = $this->Model_form_detail->add_form_detail($params);
        //     //redirect('form_detail/index');
        // }
        // else
        // {
        //     echo validation_errors();
      	// 		$this->load->model('Model_submit');
      	// 		$data['all_submit'] = $this->Model_submit->get_all_submit();
        //
        //     $data['_view'] = 'form_detail/add';
        //     //$this->load->view('layouts/main',$data);
        // }

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
          redirect('form/list');
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
      $this->session->currentForm = $ID_FORM;
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
              redirect('form/list');
          }
          else
          {
			$this->load->model('Model_place');
			$data['all_place'] = $this->Model_place->get_all_place();

			$this->load->model('Model_service_type');
			$data['all_service_type'] = $this->Model_service_type->get_all_service_type();

            $data['additional_identity_question'] = $this->Model_additional_identity->listQuestion($this->session->currentForm)->result_array();
            // $data['tkm_question'] = $this->Model_tkm_question->get_all_tkm_question_per_Form($this->session->currentForm);
            $data['tkm'] = $this->Model_tingkatKepuasanPelanggan->listTingkatKepuasanPelanggan($this->session->currentForm)->result_array();

              $data['title'] = 'Edit form';
              $data['_view'] = 'form/edit';

              $this->load->view('AdminUser/template/header',$data);
              $this->load->view('AdminUser/form/edit',$data);
              $this->load->view('AdminUser/additional_identity_question/index',$data);
              $this->load->view('AdminUser/tkm/index',$data);
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
          redirect('form/list');
      }
      else
          show_error('The form you are trying to delete does not exist.');
  }
}
