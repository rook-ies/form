<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_identity_question extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function listQuestion(){
     $identityQuestion = $this->db->get("IDENTITY_QUESTION");

     return $identityQuestion;
  }

  public function listOption($idQuestion){
    $identityOption = $this->db->get_where('IDENTITY_OPTION',array('ID_IDENTITY_QUESTION'=>$idQuestion));

     return $identityOption;
  }

  public function countOption($idQuestion){
    $this->db->where('ID_IDENTITY_QUESTION',$idQuestion);
    $this->db->from("IDENTITY_OPTION");
    $count = $this->db->count_all_results();
    return $count;
    // $count = $this->db->get_where('ADDITIONAL_IDENTITY_OPTION',array('ID_ADDITIONAL_IDENTITY_QUESTION'=>$idQuestion));
    // $count = $this->db->count_all_results();

    //return $count;
  }
  
    /*
     * Get identity_question by ID_IDENTITY_QUESTION
     */
    function get_identity_question($ID_IDENTITY_QUESTION)
    {
        return $this->db->get_where('IDENTITY_QUESTION',array('ID_IDENTITY_QUESTION'=>$ID_IDENTITY_QUESTION))->row_array();
    }

    /*
     * Get all identity_question
     */
    function get_all_identity_question()
    {
        $this->db->order_by('ID_IDENTITY_QUESTION', 'desc');
        return $this->db->get('IDENTITY_QUESTION')->result_array();
    }

    /*
     * function to add new identity_question
     */
    function add_identity_question($params)
    {
        $this->db->insert('IDENTITY_QUESTION',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update identity_question
     */
    function update_identity_question($ID_IDENTITY_QUESTION,$params)
    {
        $this->db->where('ID_IDENTITY_QUESTION',$ID_IDENTITY_QUESTION);
        return $this->db->update('IDENTITY_QUESTION',$params);
    }

    /*
     * function to delete identity_question
     */
    function delete_identity_question($ID_IDENTITY_QUESTION)
    {
        return $this->db->delete('IDENTITY_QUESTION',array('ID_IDENTITY_QUESTION'=>$ID_IDENTITY_QUESTION));
    }


}
