<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contenido extends CI_Controller {

	public function index(){
		$this->load->view('eleccion_contenido');
	}

	public function contenido_cuidado_fisico(){
		$this->load->view('contenido_cuidado_fisico');
	}
	public function contenido_cuidado_mental(){
		$this->load->view('contenido_cuidado_mental');
	}
	public function contenido_cuidado_alimenticio(){
		$this->load->view('contenido_cuidado_alimenticio');
	}
}

