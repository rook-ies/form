<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Model_tkm_answer extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tkm_answer by ID_TKM_ANSWER
     */
    function get_tkm_answer($ID_TKM_ANSWER)
    {
        return $this->db->get_where('TKM_ANSWER',array('ID_TKM_ANSWER'=>$ID_TKM_ANSWER))->row_array();
    }
        
    /*
     * Get all tkm_answer
     */
    function get_all_tkm_answer()
    {
        $this->db->order_by('ID_TKM_ANSWER', 'desc');
        return $this->db->get('TKM_ANSWER')->result_array();
    }
        
    /*
     * function to add new tkm_answer
     */
    function add_tkm_answer($params)
    {
        $this->db->insert('TKM_ANSWER',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tkm_answer
     */
    function update_tkm_answer($ID_TKM_ANSWER,$params)
    {
        $this->db->where('ID_TKM_ANSWER',$ID_TKM_ANSWER);
        return $this->db->update('TKM_ANSWER',$params);
    }
    
    /*
     * function to delete tkm_answer
     */
    function delete_tkm_answer($ID_TKM_ANSWER)
    {
        return $this->db->delete('TKM_ANSWER',array('ID_TKM_ANSWER'=>$ID_TKM_ANSWER));
    }
}