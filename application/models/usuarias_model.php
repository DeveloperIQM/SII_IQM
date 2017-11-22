<?php 
/**
* 
*/
class Usuarias_model extends CI_Model{
	public function getUsuaria()
	{
		$this->db->select('*');
		$this->db->from('usuaria');
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