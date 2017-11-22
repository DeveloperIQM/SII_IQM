<?php

Class Login_model extends CI_Model{
  public function __construct() {
    parent::__construct();
  }
  //Función para obtener el usuario
  public function obtenerUsuario($usuario, $contrasena){
    $this->db->where('usuario',$usuario);
    $this->db->where('contrasena',$contrasena);
    $query = $this->db->get('usuario');
    if($query->num_rows() == 1){
      return $query->row();
    }else{
    $this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');
    redirect(base_url().'login_controller','refresh');
   }
  }
}