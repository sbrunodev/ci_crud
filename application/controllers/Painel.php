<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {
 
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
         $this->load->model('Empresa_model','model',TRUE);

     // $this->load->library('controllers/Empresa');

        //Carrega o Modelo
        //$this->load->model('Empresa_model','model',TRUE);
        if($_SESSION["Nome"]=="")
        	$this->logout();

	}

	 
    function index() 
    {
        $this->load->helper('form');
        $data['titulo'] = "Eai Chegou? | Painel ";
        //$data['empresas'] = $this->model->listar();
        $data['empresa'] = $_SESSION["Nome"];
        
        $this->load->view('Painel/painel_view.php', $data);
    }

    function logout(){

    	session_destroy();
    	$_SESSION["Nome"] = "";
        $_SESSION["ID"] = "";

    	redirect('Home');
    }


    function EditEmpresa(){
        

       $data['empresa'] = $_SESSION["Nome"];
       $data['titulo'] = "Empresa | Editar";


       $data['dados_empresa'] = $this->model->editar($_SESSION["ID"]);

       $this->load->view('Painel/painel_editEmpresa.php', $data);
    }

    function Atualizar(){


        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<span>', '</span>');
        
        $validations = array(
        
            array(
                'field' => 'email',
                'label' => 'E-mail',
                'rules' => 'trim|required|valid_email|max_length[100]'
            )
        );
        $this->form_validation->set_rules($validations);
        
        /* Executa a validação e caso houver erro chama a função editar do controlador novamente */
        if ($this->form_validation->run() === FALSE) {
                $this->editar($this->input->post('id'));
        } else {
            /* Senão obtém os dados do formulário */
            $data['id'] = $_SESSION["ID"];
            $data['escola'] = $this->input->post('escola');
            $data['email']  = $this->input->post('email');
            $data['senha']  = $this->input->post('senha');
     
            /* Executa a função atualizar do modelo passando como parâmetro os dados obtidos do formulário */
            if ($this->model->atualizar($data)) {
                $_SESSION["Nome"] = $this->input->post('escola');
                redirect('painel');
            } else {
                log_message('error', 'Erro ao atualizar a Empresa.');
            }
        }

    }


    // --------------- Aluno
    function aluno(){
        $this->load->helper('form');
        $data['titulo'] = "Eai Chegou? | Painel ";
        //$data['empresas'] = $this->model->listar();
        $data['empresa'] = $_SESSION["Nome"];
        
        $this->load->view('Painel/painel_cadAluno.php', $data);
        
    }


    // --------------- Series/Cursos
    function series(){
        redirect('Series');
    }


    function disciplina(){
        redirect('Disciplina');
    }

}