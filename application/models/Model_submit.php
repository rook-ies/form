<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Model_submit extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get submit by ID_SUBMIT
     */
    function get_submit($ID_SUBMIT)
    {
        return $this->db->get_where('SUBMIT',array('ID_SUBMIT'=>$ID_SUBMIT))->row_array();
    }
        
    /*
     * Get all submit
     */
    function get_all_submit()
    {
        $this->db->order_by('ID_SUBMIT', 'desc');
        return $this->db->get('SUBMIT')->result_array();
    }
        
    /*
     * function to add new submit
     */
    function add_submit($params)
    {
        $this->db->insert('SUBMIT',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update submit
     */
    function update_submit($ID_SUBMIT,$params)
    {
        $this->db->where('ID_SUBMIT',$ID_SUBMIT);
        return $this->db->update('SUBMIT',$params);
    }
    
    /*
     * function to delete submit
     */
    function delete_submit($ID_SUBMIT)
    {
        return $this->db->delete('SUBMIT',array('ID_SUBMIT'=>$ID_SUBMIT));
    }
}