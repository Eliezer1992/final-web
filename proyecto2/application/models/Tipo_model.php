<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Tipo_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tipo by id_tipo
     */
    function get_tipo($id_tipo)
    {
        return $this->db->get_where('tipo',array('id_tipo'=>$id_tipo))->row_array();
    }
    
    /*
     * Get all tipo
     */
    function get_all_tipo()
    {
        return $this->db->get('tipo')->result_array();
    }
    
    /*
     * function to add new tipo
     */
    function add_tipo($params)
    {
        $this->db->insert('tipo',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tipo
     */
    function update_tipo($id_tipo,$params)
    {
        $this->db->where('id_tipo',$id_tipo);
        $response = $this->db->update('tipo',$params);
        if($response)
        {
            return "tipo updated successfully";
        }
        else
        {
            return "Error occuring while updating tipo";
        }
    }
    
    /*
     * function to delete tipo
     */
    function delete_tipo($id_tipo)
    {
        $response = $this->db->delete('tipo',array('id_tipo'=>$id_tipo));
        if($response)
        {
            return "tipo deleted successfully";
        }
        else
        {
            return "Error occuring while deleting tipo";
        }
    }
}
