<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Juego extends CI_Controller {

	public function index(){

		$this->load->view('eleccion_juego');
	}
	public function juego1(){
		$this->load->view('juego_motricidad');
	}
	public function juego2(){
		//juego 2
	}
	public function juego3(){
		//juego 3
	}

}

