<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newcontroller extends CI_Controller {
	function _construct(){
		parent::_construct();
		//$this->load->helper('form'); no se debe invocar en constructor
		//$this->load->model('record_model');
	}
	function index(){
		$this->load->view('newcontroller/bienvenido');
	}
	function segunda(){
		$this->load->view('newcontroller/headers');
		$this->load->view('newcontroller/bienvenido');
	}
}
?>