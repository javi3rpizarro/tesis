<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	public function index(){

		$this->load->view('eleccion_video');
	}
	public function video1(){
		$this->load->view('video_informativo');
	}
	public function video2(){
		$this->load->view('video_mental');
	}
	public function video3(){
		$this->load->view('video_nutricional');
	}


}

