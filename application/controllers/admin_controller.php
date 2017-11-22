<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/** 
Autor: María de los Ángeles Godínez Rivas
Fecha Creación: 09 Noviembre 2017
Fecha Modificación: 
Proyecto: Sistema de Información Interna IQM
Archivo: Controlador Admin
Versión: 1.0
*/
class Admin_controller extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function index(){
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
		{
			redirect(base_url().'login_controller');
		}
		$data['titulo'] = 'Bienvenido Administrador';
		$this->load->view('admin_view',$data);
	}
}