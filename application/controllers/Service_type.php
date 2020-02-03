<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Service_type extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_service_type');
        $this->logged_in();
    }

      private function logged_in() {
        if(! $this->session->userdata('authenticated')) {
            redirect(site_url('SuperAdmin/login'));
        }
    }
    /*
     * Listing of service_type
     */
    function index()
    {
        $data['service_type'] = $this->Model_service_type->get_all_service_type();

        $data['_view'] = 'service_type/index';
        $data['title'] = 'service type [all]';
        $this->load->view('superAdmin/template/header',$data);
        $this->load->view('SuperAdmin/service_type/index',$data);
        $this->load->view('superAdmin/template/footer',$data);
    }

    /*
     * Adding a new service_type
     */
    function add()
    {
        $this->load->library('form_validation');

		$this->form_validation->set_rules('SERVICE_TYPE','SERVICE TYPE','required|max_length[255]');

		if($this->form_validation->run())
        {
            $params = array(
				'SERVICE_TYPE' => $this->input->post('SERVICE_TYPE'),
            );

            $service_type_id = $this->Model_service_type->add_service_type($params);
            redirect(site_url('Service_type/index'));
        }
        else
        {
            $data['_view'] = 'service_type/add';
            $data['title'] = 'add service type';
            $this->load->view('superAdmin/template/header',$data);
            $this->load->view('SuperAdmin/service_type/add',$data);
            $this->load->view('superAdmin/template/footer',$data);
        }
    }

    /*
     * Editing a service_type
     */
    function edit($ID_SERVICE_TYPE)
    {
        // check if the service_type exists before trying to edit it
        $data['service_type'] = $this->Model_service_type->get_service_type($ID_SERVICE_TYPE);

        if(isset($data['service_type']['ID_SERVICE_TYPE']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('SERVICE_TYPE','SERVICE TYPE','required|max_length[255]');

			if($this->form_validation->run())
            {
                $params = array(
					'SERVICE_TYPE' => $this->input->post('SERVICE_TYPE'),
                );

                $this->Model_service_type->update_service_type($ID_SERVICE_TYPE,$params);
                redirect(site_url('Service_type/index'));
            }
            else
            {
                $data['_view'] = 'service_type/edit';
                $data['title'] = 'edit service type';
                $this->load->view('superAdmin/template/header',$data);
                $this->load->view('SuperAdmin/service_type/edit',$data);
                $this->load->view('superAdmin/template/footer',$data);
            }
        }
        else
            show_error('The service_type you are trying to edit does not exist.');
    }

    /*
     * Deleting service_type
     */
    function remove($ID_SERVICE_TYPE)
    {
        $service_type = $this->Model_service_type->get_service_type($ID_SERVICE_TYPE);

        // check if the service_type exists before trying to delete it
        if(isset($service_type['ID_SERVICE_TYPE']))
        {
            $this->Model_service_type->delete_service_type($ID_SERVICE_TYPE);
            redirect(site_url('Service_type/index'));
        }
        else
            show_error('The service_type you are trying to delete does not exist.');
    }

}
