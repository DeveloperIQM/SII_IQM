<?php
/** 
Autor: María de los Ángeles Godínez Rivas
Fecha Creación: 07 Noviembre 2017
Fecha Modificación: 
Proyecto: Sistema de Información Interna IQM
Archivo: Controlador Inicio
Versión: 1.0
*/
class Login extends CI_Controller
{
	//Función que carga la página de Login al intentar ingresar al sistema
	public function index(){
		$this->load->view("header/head");
		$this->load->view("header/nav");
		$this->load->view("header/head");
		$this->load->view("footer/footer");

		$this->db->get('agente');
	}
}
?>