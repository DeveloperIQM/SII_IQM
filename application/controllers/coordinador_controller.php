<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
/**
 * 
 */
class Coordinador_controller extends CI_Controller {
	public function __construct() {
 		parent::__construct();
 	}
 
 	public function index(){
 		if($this->session->userdata('perfil') == FALSE){
 			redirect(base_url().'login_controller');
 		}
 		$data['titulo'] = 'Bienvenido a la web '.$this->session->userdata('perfil');
 		$this->load->view('coordinador_view',$data);
 	}
}