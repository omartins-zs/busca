<?php
Class Busca_model extends CI_Model {

    public function usuarios(){
        return $this->db->get('usuarios')->result_array();
    }
}