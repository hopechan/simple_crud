<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class UsuariosModel extends CI_Model{
        public function getAll(){
            $this->db->get()->result();
        }

        function FunctionName(Type $var = null)
        {
            # code...
        }
    }
    
?>