<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo_usuario extends CI_Model {



	public function login($rut){

		$this->db->where('rut',$rut);
		$usuario = $this->db->get('usuario');
		return $usuario->row();
	}
	public function insertar($rut, $nombre){

		$this->db->insert('usuario', array(
			'rut'=> $rut, 
			'nombre' => $nombre
		));
		return $this->db->affected_rows();
	}
}