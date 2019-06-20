<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('UsuariosModel');
	}
	
	public function index(){
        $dato['titulo'] = 'Usuarios';
        //cargando la vista
		$this->load->view('usuarios/index', $dato);
	}

	public function recargar(){
		$data = ['usuarios' => $this->UsuariosModel->getAll()];
		$this->load->view('usuarios/tabla', $data);
	}

	public function ingresar(){
		$data = [$_POST['nombre'], $_POST['apellido']];
		$this->UsuariosModel->ingresar($data);
	}
}
