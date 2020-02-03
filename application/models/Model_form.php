<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_form extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function listForm()
  {
      $forms = $this->db->get("FORM");
      return $forms;
  }

  public function getFormPerPlace($ID_PLACE){
      //$this->db->where('ID_PLACE'=>$ID_PLACE);
      return $this->db->get_where("FORM",array('ID_PLACE'=>$ID_PLACE));
  }

  public function showForm($id){
      $form =  $this->db->get_where("FORM",array('id_form'=> $id));
      return $form;
  }

  function get_form($ID_FORM)
    {
        return $this->db->get_where('FORM',array('ID_FORM'=>$ID_FORM))->row_array();
    }

    /*
     * Get all form
     */
    function get_all_form()
    {
        // $this->db->where('ID_PLACE',$ID_PLACE);
        $this->db->order_by('ID_FORM', 'desc');
        return $this->db->get('FORM')->result_array();
    }

    function get_all_form_per_place($ID_PLACE)
    {
        $form = $this->db->select('F.ID_FORM,F.TITLE,F.DESCRIPTION,ST.SERVICE_TYPE')
              ->from('FORM AS F,SERVICE_TYPE AS ST')
              ->where('F.ID_SERVICE_TYPE = ST.ID_SERVICE_TYPE')
              ->where('F.ID_PLACE',$ID_PLACE)
              ->order_by('ID_FORM','desc');
          $form = $this->db->get();
          return $form->result_array();
        // $this->db->where('ID_PLACE',$ID_PLACE);
        // $this->db->order_by('ID_FORM', 'desc');
        // return $this->db->get('FORM')->result_array();
    }

    /*
     * function to add new form
     */
    function add_form($params)
    {
        $this->db->insert('FORM',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update form
     */
    function update_form($ID_FORM,$params)
    {
        $this->db->where('ID_FORM',$ID_FORM);
        return $this->db->update('FORM',$params);
    }

    /*
     * function to delete form
     */
    function delete_form($ID_FORM)
    {
        return $this->db->delete('FORM',array('ID_FORM'=>$ID_FORM));
    }

}
