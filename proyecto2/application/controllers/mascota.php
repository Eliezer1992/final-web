<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mascota extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mascota_model');
    //Codeigniter : Write Less Do More
  }

  function index()
  {

    $data = array();

    $id =(isset($_GET['id']))?$_GET['id']+0:0;

    $data['mascota'] = $this->Mascota_model->cargarMascota($id);


  $data['mascotas'] = $this->Mascota_model->listaMascotas();

  $data['tipos'] = $this->Mascota_model->listarTipos();

    $this->load->view('mascota\mascota',$data);
  }


  //funcion para guardar los datos de los jugadores
  function guardar(){

    if($_POST){
      $this->Mascota_model->guardarMascota($_POST);
    }else{
      echo "Complete los Campos";
    }

    $this->load->view('mensaje');
  }


  function delete(){

    $id =(isset($_GET['id']))?$_GET['id']+0:0;

   $this->Mascota_model->eliminarMascota($id);
   $this->load->view('mensaje');
  }
}
