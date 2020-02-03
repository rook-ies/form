<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Tkm_question extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_tkm_question');
    }

    /*
     * Listing of tkm_question
     */
    function index()
    {
        $data['tkm_question'] = $this->Model_tkm_question->get_all_tkm_question();

        $data['_view'] = 'tkm_question/index';
        $data['title'] = 'Tingkat kepuasan masyarakat question';

        $this->load->view('AdminUser/template/header',$data);
        $this->load->view('AdminUser/tkm_question/index',$data);
        $this->load->view('AdminUser/template/footer',$data);
    }

    /*
     * Adding a new tkm_question
     */
    function add()
    {
        $this->load->library('form_validation');

		$this->form_validation->set_rules('QUESTION','QUESTION','required|max_length[1024]');
		$this->form_validation->set_rules('ID_TKM','ID TKM','required');

		if($this->form_validation->run())
        {
            $params = array(
				'ID_TKM' => $this->input->post('ID_TKM'),
				'QUESTION' => $this->input->post('QUESTION'),
            );

            $tkm_question_id = $this->Model_tkm_question->add_tkm_question($params);
            redirect(site_url('Tkm/edit/'.$this->session->currentTKM));
        }
        else
        {
			$this->load->model('Model_tkm');
			$data['all_tkm'] = $this->Model_tkm->get_all_tkm();

            $data['_view'] = 'tkm_question/add';
            $data['title'] = 'Add tingkat kepuasan masyarakat question';

            $this->load->view('AdminUser/template/header',$data);
            $this->load->view('AdminUser/tkm_question/add',$data);
            $this->load->view('AdminUser/template/footer',$data);
        }
    }

    /*
     * Editing a tkm_question
     */
    function edit($ID_TKM_QUESTION)
    {
        // check if the tkm_question exists before trying to edit it
        $data['tkm_question'] = $this->Model_tkm_question->get_tkm_question($ID_TKM_QUESTION);

        if(isset($data['tkm_question']['ID_TKM_QUESTION']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('QUESTION','QUESTION','required|max_length[1024]');
			$this->form_validation->set_rules('ID_TKM','ID TKM','required');

			if($this->form_validation->run())
            {
                $params = array(
					'ID_TKM' => $this->input->post('ID_TKM'),
					'QUESTION' => $this->input->post('QUESTION'),
                );

                $this->Model_tkm_question->update_tkm_question($ID_TKM_QUESTION,$params);
                // redirect('tkm_question/index');
                redirect(site_url('Tkm/edit/'.$this->session->currentTKM));

            }
            else
            {
				$this->load->model('Model_tkm');
				$data['all_tkm'] = $this->Model_tkm->get_all_tkm();

                $data['_view'] = 'tkm_question/edit';
                $data['title'] = 'Tingkat kepuasan masyarakat question';

                $this->load->view('AdminUser/template/header',$data);
                $this->load->view('AdminUser/tkm_question/edit',$data);
                $this->load->view('AdminUser/template/footer',$data);
            }
        }
        else
            show_error('The tkm_question you are trying to edit does not exist.');
    }

    /*
     * Deleting tkm_question
     */
    function remove($ID_TKM_QUESTION)
    {
        $tkm_question = $this->Model_tkm_question->get_tkm_question($ID_TKM_QUESTION);

        // check if the tkm_question exists before trying to delete it
        if(isset($tkm_question['ID_TKM_QUESTION']))
        {
            $this->Model_tkm_question->delete_tkm_question($ID_TKM_QUESTION);
            redirect(site_url('Tkm/edit/'.$this->session->currentTKM));
        }
        else
            show_error('The tkm_question you are trying to delete does not exist.');
    }

}
