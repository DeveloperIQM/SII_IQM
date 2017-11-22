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
	public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
        $this->load->database('default');
    }
    
    //Función que verifica si existe la sesión perfil y saber que contiene para redigir a la página correspondiente
    public function index(){ 
        switch ($this->session->userdata('perfil')) {
            case '':
                $data['token'] = $this->token();
                $data['titulo'] = 'SII IQM - Login';
                $this->load->view('login_view',$data);
                break;
            case 'administrador':
                redirect(base_url().'administrador');
                break;
            case 'profesional':
                redirect(base_url().'profesional');
                break; 
            case 'coordinador':
                redirect(base_url().'coordinador');
                break;
            default: 
                $data['titulo'] = 'Login con roles de usuario en codeigniter';
                $this->load->view('login_view',$data);
                break; 
         }
    }
    
    //Función que permite iniciar sesión a un nuevo usuario
    public function abrirSesion(){
        if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token')){
            $this->form_validation->set_rules('usuario', 'nombre de usuario', 'required|trim|min_length[2]|max_length[150]|xss_clean');
            $this->form_validation->set_rules('contrasena', 'contrasena', 'required|trim|min_length[5]|max_length[150]|xss_clean');
            //lanzamos mensajes de error si es que los hay
            if($this->form_validation->run() == FALSE){
                $this->index();
            }else{
                $usuario = $this->input->post('usuario');
                $contrasena = sha1($this->input->post('contrasena'));
                $res_usuario = $this->login_model->obtenerUsuario($usuario,$contrasena);
                if($res_usuario == TRUE){
                    $data = array(
                            'is_logued_in' => TRUE,
                            'id_usuario' => $res_usuario->id_usuario,
                            'perfil' => $res_usuario->perfil,
                            'usuario' => $res_usuario->usuario
                    ); 
                    $this->session->set_userdata($data);
                    $this->index();
                }
            }
        }else{
            redirect(base_url().'login_controller');
        }
    }
    
    //Creación de clave aleatoria que evita Cross-Site Request Forgery
    public function token(){
        $token = md5(uniqid(rand(),true));
        $this->session->set_userdata('token',$token);
        return $token;
    }
    
    //Función para eliminar sesión
    public function cerrarSesion(){
        $this->session->sess_destroy();
        $this->index();
    }
}