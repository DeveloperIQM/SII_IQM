<?php
/** 
Autor: María de los Ángeles Godínez Rivas
Fecha Creación: 07 Noviembre 2017
Fecha Modificación: 
Proyecto: Sistema de Información Interna IQM
Archivo: Controlador Inicio
Versión: 1.0
*/
class Crud_usuarios extends CI_Controller
{
	public function __construct(){
        parent::__construct();
        $this->load->model('usuarios_model');
        $this->load->database('default');
    }

    function index(){
	        $this->load->view('comentarios_view');
	 }

	public function insertarUsuario(){
		if($this->input->post('submit')){
			$this->form_validation->set_rules('nombre','nombre','trim|required|xss_clean|max_lenght[100]|min_length[10]');
 			$this->form_validation->set_rules('profesion','profesion','trim|required|xss_clean');
 			$this->form_validation->set_rules('perfil','perfil','trim|required|xss_clean');
 			$this->form_validation->set_rules('area','area','trim|required|xss_clean');
 			$this->form_validation->set_rules('usuario','usuario','trim|required|xss_clean');
 			$this->form_validation->set_rules('contrasena','contrasena','trim|required|xss_clean|max_lenght[15]|min_length[8]');

 			$this->form_validation->set_message('required', 'Campo %s es obligatorio');
 			$this->form_validation->set_message('min_length', 'Campo %s debe tener al menos %s car&aacute;cteres');
 			$this->form_validation->set_message('max_length', 'Campo %s debe tener menos %s car&aacute;cteres');
 			
 			if (!$this->form_validation->run()){

			 	$this->index();

			}else{

				$nombre     = $this->input->post('nombre'); 
				$profesion  = $this->input->post('profesion'); 
				$perfil     = $this->input->post('perfil'); 
				$area       = $this->input->post('area');
				$usuario    = $this->input->post('usuario');
				$contrasena = $this->input->post('contrasena');

				$insert = $this->usuarios_model->insertUsuario( $nombre, $profesion, $perfil, $area, $usuario, $contrasena);
				
				redirect(base_url("usuarios_controller"), "refresh");
			}
		}
	}
}
?>