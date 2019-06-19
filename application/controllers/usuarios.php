<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('UsuariosModel');
	}
	
	public function index()
	{
        $dato['titulo'] = 'Controlador de Usuario';
        //cargando la vista
		$this->load->view('usuarios/index.php', $dato);
	}

	public function recargar(){
		$data = ['usuarios' => $this->usuariosModel->getAll()];
		$this->load->view('usuario/Tabla', $data);
	}
}
