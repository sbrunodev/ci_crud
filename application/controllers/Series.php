<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Series extends CI_Controller {
 
  

    function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');


		/* Carrega o modelo */
		$this->load->model('Series_model', 'model', TRUE);

		//$this->load->model('Pessoas_model', 'model', TRUE);
	}
	 
    function index() 
    {
        $this->load->helper('form');
        $data['titulo'] = "Eai Chegou? | Painel ";
        //$data['empresas'] = $this->model->listar();
        $data['empresa'] = $_SESSION["Nome"];
        $data['series'] = $this->model->listar();
        $data['modo'] = "inserir";

        
        $this->load->view('Painel/painel_cadSeries.php', $data);

    }


    function inserir() {
 
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
            $data['nome'] = $this->input->post('nome');
            $nome['nome'] = $this->input->post('nome');
            $nome['idempresa'] = $_SESSION['ID'];
           /*  Chama a função inserir do modelo */
            if ($this->model->inserir($nome)) {
                $this->index();
            } else {
                log_message('error', 'Erro ao inserir Series/Curso.');
            }
        }
	}


 

 
	function deletar($id) {
 
		/* Executa a função deletar do modelo passando como parâmetro o id da pessoa */
		if ($this->model->deletar($id)) {
			$this->index();
		} else {
			log_message('error', 'Erro ao deletar a Serie/Curso.');
		}
	}

	function editar($id)  {
        
        $data['titulo'] = "Eai Chegou? | Painel ";
        //$data['empresas'] = $this->model->listar();
        $data['empresa'] = $_SESSION["Nome"];
        $data['series'] = $this->model->listar();
        $data['modo'] = "edicao";
        $data['dados_serie'] = $this->model->editar($id);
        
        $this->load->view('Painel/painel_cadSeries.php', $data);
       
    }

    function edicao() {
 
        /* Carrega a biblioteca do CodeIgniter responsável pela validação dos formulários */
        $this->load->library('form_validation');
     
        /* Define as tags onde a mensagem de erro será exibida na página */
        $this->form_validation->set_error_delimiters('<span>', '</span>');
     
        /* Define as regras para validação */
        $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[40]');
      
        
        /* Executa a validação e caso houver erro chama a função editar do controlador novamente */
        if ($this->form_validation->run() === FALSE) {
                $this->editar($this->input->post('id'));
        } else {
            /* Senão obtém os dados do formulário */
            $data['id'] = $this->input->post('id');
            $data['nome'] = ucwords($this->input->post('nome'));
     
            /* Executa a função atualizar do modelo passando como parâmetro os dados obtidos do formulário */
            if ($this->model->atualizar($data)) {
                $this->index();
            } else {
                log_message('error', 'Erro ao atualizar a Serie/Curso.');
            }
        }
    }



}