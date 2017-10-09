<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datos extends CI_Controller {
    //$this->usuarios;
	public function __construct(){
		parent::__construct();
        $this->usuarios='';
		//$this->load->helper('form'); no se debe invocar en constructor
		//si aqui no se cargar la database????
		//$this->load->database();
		$this->load->model('dat_model');
        $this->usuarios=$this->dat_model->cusuarios();
	}
    
	public function index(){
		//$data['usuarios']=$this->record_model->obteneruser();
		$this->load->view('datos/sesion');
		$this->load->view('datos/inicio');
		//$this->load->view('datos/usuarios',$data);
	}
	function formularios(){
		$this->load->view('datos/sesion');
		$this->load->view('datos/formu');
	}

	public function editor(){
		$this->load->view('datos/editar');
	}
							//SE LEEN LOS PARAMETROS QUE MANDA LA ETIQUETA <a></a>
	public function usuarios(/*$parametro1,$parametro2*/){

		//$datos['usuario'] = $this->dat_model->cusuarios();
        $datos['usuario']=$this->usuarios;
		$this->load->view('newcontroller/headers');
		$this->load->view('datos/usuarios',$datos);
	}
	public function recibirdatos(){
		//die(var_dump($this->input->post()));  PARA EL TRACKING DE ERRORES...QUE DATOS TRAE
		$datos = array(
			'usuario' => $this->input->post('usuario'),
			'pass' => $this->input->post('contra'),
			'nombre' => $this->input->post('nombre')
			);
		$this->dat_model->crearUsuario($datos);
		$this->load->view('newcontroller/bienvenido2');
	}

	public function cambiardatos(){
		$usuario=$this->dat_model->cusuario($this->input->post('usuario'));
		//Es enviar por medio de una variable a un modelo que tiene el post lo que viene del formulario
		$clave=$usuario['0']->idusuario;
		//aqui igualas a clave con el valor que te da la BD en el id, DUDA es necesario lo del arreglo...
		$this->dat_model->cambiar($clave,$this->input->post('contra'));
		//mandar el id y la contraseña nueva
		$this->load->view('newcontroller/cambio');
	}

	public function cambiarusuario(){		
		$usuario=$this->dat_model->cusuario($this->input->post('usuario'));
		//Es enviar por medio de una variable a un modelo que tiene el post lo que viene del formulario
		$clave=$usuario['0']->idusuario;
		//aqui igualas a clave con el valor que te da la BD en el id, DUDA es necesario lo del arreglo...
		$this->dat_model->cambio($clave,$this->input->post('nuevo'));
		//mandar el id y la contraseña nueva
		$this->load->view('newcontroller/cambio');

	}

	public function regresar(){
		$this->load->view('datos/sesion');
		$this->load->view('datos/inicio');
	}
}
?>