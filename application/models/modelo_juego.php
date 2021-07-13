<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo_juego extends CI_Model {


		public function insertar($rut, $id_juego, $puntaje){
		$this->db->insert('puntaje', array(
			'rut'=> $rut, 
			'id_tipo_juego' => $id_juego,
			'menor_tiempo' => $puntaje
		));
		return $this->db->affected_rows();
	}


}