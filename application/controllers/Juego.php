<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Juego extends CI_Controller {

	public function index(){

		$this->load->view('eleccion_juego');
	}
	public function juego1(){
		
		$data['nombre'] = $this->session->nombre;
		$this->load->view('juego_motricidad', $data);
	}
	public function juego2(){
		$this->load->view('juego_mental');
	}
	public function juego3(){
		$this->load->view('juego_nutricional');
	}

	public function puntaje ($id_juego, $puntaje){
	$this->load->model('modelo_juego');
	$rut = $this->session->rut;
	$this->modelo_juego->insertar($rut, $id_juego, $puntaje);
	echo "puntaje ingresado";


	}


}

