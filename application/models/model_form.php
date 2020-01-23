<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_form extends CI_Model{

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
        $this->db->order_by('ID_FORM', 'desc');
        return $this->db->get('FORM')->result_array();
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
