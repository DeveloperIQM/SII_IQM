<?php
/** 
Autor: María de los Ángeles Godínez Rivas
Fecha Creación: 06 Noviembre 2017
Fecha Modificación: 
Proyecto: Sistema de Información Interna IQM
Archivo: Controlador Login
Versión: 1.0
*/
class Login_controller extends CI_Controller{
	function __construct(){
	 	parent::__construct();
	   	$this->load->helper('form'); 
	   	$this->load->library('form_validation'); 
	   	$this->load->library('session'); 
	   	$this->load->model('login_model');
	}

	function index(){
	    $this->load->helper(array('form'));
	    $this->load->view('login_view');
	}

	public function loginProceso(){
      	//Valida los campos 
        $this->form_validation->set_rules('usuario', 'Usuario', 'trim|required|xss_clean');
        $this->form_validation->set_rules('contrasena', 'Contrasena', 'trim|required|xss_clean');        
        if ($this->form_validation->run() == FALSE) {
            if(isset($this->session->userdata['logged_in'])){
                header('Location:'.base_url().'inicio.php');
            }else{
                $this->load->view('login');                
            }
        }else{
                $data = array(
                	'uuname' => $this->input->post('usuario'),
                    'upass' => md5($this->input->post('contrasena'))
                );          

                $result = $this->login_model->obtenerUsuario($data);            
                if ($result == TRUE) {                
                    $usuario = $this->input->post('usuario');
                    $result = $this->login_model->obtenerInfoUsuario($usuario);
                
                    if ($result != false) {
                        $session_data = array(
                                            'usuario' => $result[0]->usuario,
                                            'idusuario'=> $result[0]->id,
                                        );                                        
                        // Pasa el arreglo a la vista
                        $this->session->set_userdata('logged_in', $session_data);    
                        header('Location:'.base_url().'inicio.php');                                    
                       
                    }
                }else{
                    $data = array('error_message' => 'Usuario o Contraseña NO válidos.');
                    $this->load->view('login', $data);
                }
        }
    }
   public function logout() {
        // Elimina los datos de la sesión
        $sess_array = array(
        				'usuario' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'La sesión finalizó correctamente.';
        $this->load->view('login', $data);
     }

}