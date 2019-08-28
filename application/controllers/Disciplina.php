<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Disciplina extends CI_Controller {
 
  	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');


		/* Carrega o modelo */
		//$this->load->model('Series_model', 'model', TRUE);

		$this->load->model('Disciplina_model', 'model', TRUE);
	}
	 
    function index() 
    {
        $this->load->helper('form');
        $data['titulo'] = "Eai Chegou? | Painel ";
        //$data['empresas'] = $this->model->listar();
        $data['empresa'] = $_SESSION["Nome"];
        $data['series'] = $this->model->listarSerieCurso();
        $data['disciplinas'] = $this->model->listar();
        $data['modo'] = "inserir";

        
        $this->load->view('Painel/painel_Disciplina.php', $data);

    }

    function inserir(){
    	$nome = $this->input->post('series-cursos');


    	 $this->load->library('form_validation');
     
        /* Define as tags onde a mensagem de erro será exibida na página */
        $this->form_validation->set_error_delimiters('<span>', '</span>');
     
        /* Define as regras para validação */
        $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[40]');

           /* Executa a validação e caso houver erro chama a função index do controlador */
        if ($this->form_validation->run() === FALSE) {
            $this->index();
        /* Senão, caso sucesso: */  
        } else {
            /* Recebe os dados do formulário (visão) */
            	$data['nome_disciplina'] = $this->input->post('nome');
    			$data['idcursoserie'] = $this->input->post('series-cursos');
    			$data['idempresa'] = $_SESSION['ID'];
           /*  Chama a função inserir do modelo */
            if ($this->model->inserir($data)) {
                $this->index();
            } else {
                log_message('error', 'Erro ao inserir Series/Curso.');
            }
        }
    }

    function editar($id)  {
        
        $data['titulo'] = "Eai Chegou? | Painel ";
        //$data['empresas'] = $this->model->listar();
        $data['empresa'] = $_SESSION["Nome"];
        $data['series'] = $this->model->listarSerieCurso();
        $data['disciplinas'] = $this->model->listar();
        $data['modo'] = "edicao";
        $data['dados_disc'] = $this->model->editar($id);
        
        $this->load->view('Painel/painel_Disciplina.php', $data);
       
    }


    function deletar($id) {
		 	/* Executa a função deletar do modelo passando como parâmetro o id da pessoa */
		if ($this->model->deletar($id)) {
			$this->index();
		} else {
			log_message('error', 'Erro ao deletar a Disciplina.');
		}
	}


 }