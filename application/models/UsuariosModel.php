<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class UsuariosModel extends CI_Model{
        
        public function getAll(){
            return $this->db->get('usuarios')->result();
        }

        public function ingresar($datos){
            $sql = "INSERT INTO usuarios(nombre, apellido) VALUES (?, ?)";
            $this->db->query($sql, $datos);
        }
    }
    
?>