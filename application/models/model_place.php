<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_place extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function showPlace($idPlace){
    $place = $this->db->select('p.NAMA, pt.TYPE,pc.CATEGORY')
          ->from('PLACE AS p, PLACE_TYPE AS pt,PLACE_CATEGORY AS pc')
          ->where('p.ID_PLACE_TYPE = pt.ID_PLACE_TYPE')
          ->where('p.ID_PLACE_CATEGORY = pc.ID_PLACE_CATEGORY')
          ->where('p.ID_PLACE', $idPlace);
    $place = $this->db->get();
    //$place=  $this->db->get_where("PLACE",array('ID_PLACE'=> $idPlace));
    $resultp = $place->row_array();

    return $resultp;
  }

  function get_place($ID_PLACE)
  {
      return $this->db->get_where('PLACE',array('ID_PLACE'=>$ID_PLACE))->row_array();
  }

  /*
   * Get all place
   */
  function get_all_place()
  {
      $place = $this->db->select('p.ID_PLACE as ID_PLACE,p.NAMA, pt.TYPE,pc.CATEGORY')
            ->from('PLACE AS p, PLACE_TYPE AS pt,PLACE_CATEGORY AS pc')
            ->where('p.ID_PLACE_TYPE = pt.ID_PLACE_TYPE')
            ->where('p.ID_PLACE_CATEGORY = pc.ID_PLACE_CATEGORY');
        $place = $this->db->get();
        return $place->result_array();
      // $this->db->order_by('ID_PLACE', 'desc');
      // return $this->db->get('PLACE')->result_array();
  }

  /*
   * function to add new place
   */
  function add_place($params)
  {
      $this->db->insert('PLACE',$params);
      return $this->db->insert_id();
  }

  /*
   * function to update place
   */
  function update_place($ID_PLACE,$params)
  {
      $this->db->where('ID_PLACE',$ID_PLACE);
      return $this->db->update('PLACE',$params);
  }

  /*
   * function to delete place
   */
  function delete_place($ID_PLACE)
  {
      return $this->db->delete('PLACE',array('ID_PLACE'=>$ID_PLACE));
  }

}
