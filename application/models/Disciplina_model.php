<?php
 
class Disciplina_model extends CI_Model {
 
    function __construct() {
        parent::__construct();
    }
 
   
    function listarSerieCurso() {
		$query = $this->db->get('curso');
		return $query->result();
	}

	function inserir($data){
		return $this->db->insert('disciplina',$data);
	}


	function listar() {

		$this->db->select('d.id, d.nome_disciplina, c.nome as idcursoserie');
	    $this->db->from('disciplina d, curso c');
	    $this->db->where('d.idcursoserie = c.id');
		$query = $this->db->get();
		return $query->result();
	}


	 function editar($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('disciplina');
        return $query->result();
    }

	function deletar($id){
		$this->db->where('id',$id);
		return $this->db->delete('disciplina');
	}
}