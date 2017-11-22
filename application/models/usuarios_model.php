<?php 
/**
* 
*/
class Usuarios_model extends CI_Model{
	public function getUsuario()
	{
		$this->db->select('id_usuario, nombre_completo, perfil');
		$this->db->from('usuario');
		$resultado = $this->db->get();
		return $resultado;
	}

	public function insertUsuario($nombre, $profesion, $perfil, $area, $usuario, $contrasena){
		$data = array( 	'perfil' => $perfil,
			 		 	'usuario' => $usuario,
			 			'contrasena' => $contrasena,
			 			'profesion' => $profesion,
			 			'area' => $area,
			 			'nombre_completo' => $nombre);
		$this->db->insert('usuario', $data);
	}
}
?>