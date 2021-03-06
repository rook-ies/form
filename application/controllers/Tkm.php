<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Tkm extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_tkm');
        $this->load->model('Model_tingkatKepuasanPelangganQuestion');
    }

    /*
     * Listing of tkm
     */
    function index()
    {
        $data['tkm'] = $this->Model_tkm->get_all_tkm();

        $data['_view'] = 'tkm/index';
        $data['title'] = 'Tingkat kepuasan masyarakat';

        $this->load->view('AdminUser/template/header',$data);
        $this->load->view('AdminUser/tkm/index',$data);
        $this->load->view('AdminUser/template/footer',$data);
    }

    /*
     * Adding a new tkm
     */
    function add()
    {
        $this->load->library('form_validation');

		$this->form_validation->set_rules('QUESTION','QUESTION','required|max_length[1024]');
		$this->form_validation->set_rules('ID_FORM','ID FORM','required');

		if($this->form_validation->run())
        {
            $params = array(
				'ID_FORM' => $this->input->post('ID_FORM'),
				'QUESTION' => $this->input->post('QUESTION'),
            );

            $tkm_id = $this->Model_tkm->add_tkm($params);
            redirect(site_url('Form/edit/'.$this->session->currentForm));
        }
        else
        {
			$this->load->model('Model_form');
			$data['all_form'] = $this->Model_form->get_all_form();

            $data['_view'] = 'tkm/add';
            $data['title'] = 'Add tingkat kepuasan masyarakat';

            $this->load->view('AdminUser/template/header',$data);
            $this->load->view('AdminUser/tkm/add',$data);
            $this->load->view('AdminUser/template/footer',$data);
        }
    }

    /*
     * Editing a tkm
     */
    function edit($ID_TKM)
    {
        // check if the tkm exists before trying to edit it
        $data['tkm'] = $this->Model_tkm->get_tkm($ID_TKM);
        $this->session->currentTKM = $ID_TKM;
        if(isset($data['tkm']['ID_TKM']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('QUESTION','QUESTION','required|max_length[1024]');
			$this->form_validation->set_rules('ID_FORM','ID FORM','required');

			if($this->form_validation->run())
            {
                $params = array(
					'ID_FORM' => $this->input->post('ID_FORM'),
					'QUESTION' => $this->input->post('QUESTION'),
                );

                $this->Model_tkm->update_tkm($ID_TKM,$params);
                redirect(site_url('Form/edit/'.$this->session->currentForm));
            }
            else
            {
				$this->load->model('Model_form');
				$data['all_form'] = $this->Model_form->get_all_form();

                $data['_view'] = 'tkm/edit';
                $data['title'] = 'Tingkat kepuasan masyarakat';

                $data['tkm_question'] = $this->Model_tingkatKepuasanPelangganQuestion->listQuestion($this->session->currentTKM)->result_array();
                //print_r($data['tkm_question']);
                $this->load->view('AdminUser/template/header',$data);
                $this->load->view('AdminUser/tkm/edit',$data);
                $this->load->view('AdminUser/tkm_question/index',$data);
                $this->load->view('AdminUser/template/footer',$data);
            }
        }
        else
            show_error('The tkm you are trying to edit does not exist.');
    }

    /*
     * Deleting tkm
     */
    function remove($ID_TKM)
    {
        $tkm = $this->Model_tkm->get_tkm($ID_TKM);

        // check if the tkm exists before trying to delete it
        if(isset($tkm['ID_TKM']))
        {
            $this->Model_tkm->delete_tkm($ID_TKM);
            redirect(site_url('Form/edit/'.$this->session->currentForm));
        }
        else
            show_error('The tkm you are trying to delete does not exist.');
    }

}
