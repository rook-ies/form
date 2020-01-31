<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_service_type extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function showService($idForm){
    $service = $this->db
          ->select('s.SERVICE_TYPE,s.ID_SERVICE_TYPE')
          ->from('FORM AS f, SERVICE_TYPE AS s')
          ->where('f.ID_SERVICE_TYPE = s.ID_SERVICE_TYPE')
          ->where('f.ID_FORM', $idForm);
    $service = $this->db->get();

    return $service;
  }

  function get_service_type($ID_SERVICE_TYPE)
    {
        return $this->db->get_where('SERVICE_TYPE',array('ID_SERVICE_TYPE'=>$ID_SERVICE_TYPE))->row_array();
    }

    /*
     * Get all service_type
     */
    function get_all_service_type()
    {
        $this->db->order_by('ID_SERVICE_TYPE', 'desc');
        return $this->db->get('SERVICE_TYPE')->result_array();
    }

    /*
     * function to add new service_type
     */
    function add_service_type($params)
    {
        $this->db->insert('SERVICE_TYPE',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update service_type
     */
    function update_service_type($ID_SERVICE_TYPE,$params)
    {
        $this->db->where('ID_SERVICE_TYPE',$ID_SERVICE_TYPE);
        return $this->db->update('SERVICE_TYPE',$params);
    }

    /*
     * function to delete service_type
     */
    function delete_service_type($ID_SERVICE_TYPE)
    {
        return $this->db->delete('SERVICE_TYPE',array('ID_SERVICE_TYPE'=>$ID_SERVICE_TYPE));
    }
}
