<?php

Class Login_model extends CI_Model{
  //Función para obtener el usuario
  public function obtenerUsuario($usuario, $contrasena){
    $this->db->select('id_usuario, usuario, contrasena');
    $this->db->from('usuario');
    $this->db->where('usuario', $usuario);
    $this->db->where('contrasena', MD5($contrasena));
    $this->db->limit(1);

    $query = $this -> db -> get();
    if($query -> num_rows() == 1){
      return $query->result();
    }else{
      return false;
    }
  }
  //Lee datos para devolver variable de la sesion
  public function obtenerInfoUsuario($usuario) {
    $this->db->select('*');
    $this->db->from('usuario');
    $this->db->where('usuario', $usuario);
    $this->db->limit(1);

    $query = $this->db->get();
    if($query->num_rows() == 1){
      return $query->result();
      }else{
        return false;
      }
  }
}