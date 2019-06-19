<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class UsuariosModel extends CI_Model{
        
        public function getAll(){
            return $this->db->get('usuarios')->result();
        }
    }
    
?>