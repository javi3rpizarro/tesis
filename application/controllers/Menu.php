<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function index(){
		
		$this->load->view('menu_principal');
	}
	public function login(){
		$rut = $this->input->post('rut');
		$nombre = $this->input->post('nombre');
		$this->load->model('modelo_usuario');
		$usuario = $this->modelo_usuario->login($rut);
		if(is_null ($usuario)){
			$this->modelo_usuario->insertar($rut, $nombre);
		}
		//var_dump($usuario);
		$this->session->rut = $rut;
		$this->session->nombre=$nombre;
		$this->session->logeado=true;
		$this->load->view('menu_principal');


	}

}

