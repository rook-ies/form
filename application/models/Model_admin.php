<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Model_admin extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function login($email, $password)
      {
          $this->db->where('EMAIL', $email);
          $this->db->where('PASSWORD', sha1($password));
          $query = $this->db->get('ADMIN');

          if($query->num_rows() == 1) {
              return $query->row();
          }

          return false;
      }

    /*
     * Get admin by ID_ADMIN
     */
    function get_admin($ID_ADMIN)
    {
        return $this->db->get_where('ADMIN',array('ID_ADMIN'=>$ID_ADMIN))->row_array();
    }

    /*
     * Get all admin
     */
    function get_all_admin()
    {
        //$this->db->order_by('a.ID_ADMIN', 'desc');
        // $this->db->select('a.NAMA,a.Email,p.NAMA');
        // $this->db->from('ADMIN as a , PLACE as p');
        // $this->db->where('a.ID_PLACE == p.ID_PLACE');

         $this->db->select('p.NAMA as NAMA_TEMPAT, a.NAMA, a.EMAIL,a.ID_ADMIN')
               ->from('PLACE AS p, ADMIN AS a')
               ->where('p.ID_PLACE = a.ID_PLACE');
        return $this->db->get()->result_array();
    }

    /*
     * function to add new admin
     */
    function add_admin($params)
    {
        $this->db->insert('ADMIN',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update admin
     */
    function update_admin($ID_ADMIN,$params)
    {
        $this->db->where('ID_ADMIN',$ID_ADMIN);
        return $this->db->update('ADMIN',$params);
    }

    /*
     * function to delete admin
     */
    function delete_admin($ID_ADMIN)
    {
        return $this->db->delete('ADMIN',array('ID_ADMIN'=>$ID_ADMIN));
    }
}
