<?php
 
class Series_model extends CI_Model {
 
    function __construct() {
        parent::__construct();
    }
 
    function inserir($data) {
       
        return $this->db->insert('curso', $data);
    }

    function listar() {
		$query = $this->db->get('curso');
		return $query->result();
	}

    function deletar($id) {
        $this->db->where('id', $id);
        return $this->db->delete('curso');
    }

     function editar($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('curso');
        return $query->result();
    }

      function atualizar($data) {
        $this->db->where('id', $data['id']);
        $this->db->set($data);
        return $this->db->update('curso');
    }


}