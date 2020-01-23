<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Model_experience extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get experience by ID_EXPERIENCE
     */
    function get_experience($ID_EXPERIENCE)
    {
        return $this->db->get_where('EXPERIENCE',array('ID_EXPERIENCE'=>$ID_EXPERIENCE))->row_array();
    }
        
    /*
     * Get all experience
     */
    function get_all_experience()
    {
        $this->db->order_by('ID_EXPERIENCE', 'desc');
        return $this->db->get('EXPERIENCE')->result_array();
    }
        
    /*
     * function to add new experience
     */
    function add_experience($params)
    {
        $this->db->insert('EXPERIENCE',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update experience
     */
    function update_experience($ID_EXPERIENCE,$params)
    {
        $this->db->where('ID_EXPERIENCE',$ID_EXPERIENCE);
        return $this->db->update('EXPERIENCE',$params);
    }
    
    /*
     * function to delete experience
     */
    function delete_experience($ID_EXPERIENCE)
    {
        return $this->db->delete('EXPERIENCE',array('ID_EXPERIENCE'=>$ID_EXPERIENCE));
    }
}