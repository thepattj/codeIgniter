<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dat_model extends CI_Model {
	function __construct(){
		parent::__construct();
		//como se carga aqui la db?
		//die('Hola');
	}

	function crearUsuario($datos){
		$this->db->insert('usuario',$datos);
	}

	function cambiar ($id,$pass){//de password
		//die(var_dump($id,$pass));
		$this->db->where('idusuario',$id);
		$this->db->update('usuario',array('pass'=>$pass));		
		//$this->db->update('usuario', $datos(pass=>post('pass')));		
	}

	function cambio($id,$user){//de usuario
		$this->db->where('idusuario',$id);
		$this->db->update('usuario',array('usuario'=>$user));
	}

	function cusuario($usuario){
		$this->db->where('usuario',$usuario);
		//en esta columna lo que viene por metodo de post
		$query= $this->db->get('usuario');
		//tomando lo que viene del controller se agregaa esta base de datos
		return $query->result();
		//aqui se regresa el valor que se obtuvo del query
	}

	function cusuarios(){
		$query = $this->db->get('usuario');
		die(var_dump($query));
		return $query;
	}
}
?>