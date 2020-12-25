<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informacion extends CI_Controller {

	public function index(){

		$this->load->view('eleccion_informacion');
	}
	public function informacion1(){
		$this->load->view('informacion');
	}
	public function informacion2(){
		//informacion 2
	}
	public function informacion3(){
		//informacion 3
	}


}

