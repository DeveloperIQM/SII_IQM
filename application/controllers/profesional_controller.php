<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
/**
 * 
 */
class Profesional_controller extends CI_Controller {
 	public function __construct() {
		parent::__construct();
		$this->load->database('default');
	}
 
 	public function index(){
 		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') == 'coordinador'){
	 		redirect(base_url().'login_controller');
	 	}
	 	$data['titulo'] = 'Bienvenido de nuevo ' .$this->session->userdata('perfil');
	 	$this->load->view('profesional_view',$data);
 	}
}