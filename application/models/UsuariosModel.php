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

        public function delete($id){
            $this->db->query("DELETE FROM usuarios WHERE id = $id");
        }

        //getById
        public function getById($id){
            return $this->db->query("SELECT * FROM usuarios WHERE id = $id")->row();
        }

        public function update($data){
            $sql = "UPDATE usuarios SET nombre = ?, apellido = ? WHERE id = ?";
            $this->db->query($sql, $data);
        }
    }
    
?>