<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_place_type extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function showPlaceType($idPlaceType){
    $placeType=  $this->db->get_where("PLACE_TYPE",array('ID_PLACE_TYPE'=> $idPlaceType));

    return $placeType;
  }

    function get_all_place_type()
    {
        $this->db->order_by('ID_PLACE_TYPE', 'desc');
        return $this->db->get('PLACE_TYPE')->result_array();
    }

    /*
     * function to add new place_type
     */
    function add_place_type($params)
    {
        $this->db->insert('PLACE_TYPE',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update place_type
     */
    function update_place_type($ID_PLACE_TYPE,$params)
    {
        $this->db->where('ID_PLACE_TYPE',$ID_PLACE_TYPE);
        return $this->db->update('PLACE_TYPE',$params);
    }

    /*
     * function to delete place_type
     */
    function delete_place_type($ID_PLACE_TYPE)
    {
        return $this->db->delete('PLACE_TYPE',array('ID_PLACE_TYPE'=>$ID_PLACE_TYPE));
    }

}
