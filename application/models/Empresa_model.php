<?php

class Empresa_model extends CI_Model{


	function __construct(){
		parent::__construct();
	}

	function inserir($data){
		return $this->db->insert('empresa',$data);
	}

	function listar(){
		$query = $this->db->get('empresa');
		return $query->result();
	}

	function deletar($id){
		$this->db->where('id',$id);
		return $this->db->delete('empresa');
		
	}

	function editar($id){
		$this->db->where('id',$id);
		$query = $this->db->get('empresa');
		return $query->result();
	}


	function atualizar ($data){
		$this->db->where ('id',$data['id']);
		$this->db->set($data);
		return $this->db->update('empresa');
	}



	function Valida ($data){
		$this->db->where('email',$data['escola']);
		$this->db->where('senha',$data['senha']);
		$query = $this->db->get('empresa');

		if($query->num_rows() > 0){
		
			foreach ($query->result() as $row):
      			return $array = array(
				    "id" => $row->id,
				    "nome" => $row->escola,
				);
    		endforeach;
		}

		return "error";
	}

}













?>