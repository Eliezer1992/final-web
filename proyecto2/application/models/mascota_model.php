<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mascota_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    //Codeigniter : Write Less Do More
  }

  function guardarMascota($mascota){

    $id = $mascota['id'];
    if($id+0 > 0){
      //actualizar
      $this->db->where('id=',$id);
      unset($mascota['id']);
      $this->db->update('mascota', $mascota);
    }else{

      $this->db->insert('mascota',$mascota);

    }

  }
 function listaMascotas(){


 $query = $this->db->get('mascota');

 return $query->result();
 }


   function cargarMascota($id){
     $mascota = new stdclass();
     $mascota->id = 0;
     $mascota->titulo = "";
     $mascota->direccion = "";
     $mascota->tipo= "";
     $mascota->precio = "";
     $mascota->accion= "";
     $mascota->descripcion= "";
     $mascota->foto= "";
     

     $query = $this->db->where("id=",$id);
     $query = $this->db->get('mascota');

     $rs = $query->result();
     if(count($rs) > 0){
       $mascota = $rs[0];
     }

     return $mascota;

   }

   function eliminarMascota($id){
     $this->db->where('id=',$id);
     $this->db->delete('mascota');

   }

   function listarTipos(){

     $query=$this->db->get('tipo');
     return $query->result();
   }
}
