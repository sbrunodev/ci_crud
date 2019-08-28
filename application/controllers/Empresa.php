<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends CI_Controller {
 
  

    function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
        $this->load->library('session');
        //Carrega o Modelo
        $this->load->model('Empresa_model','model',TRUE);
	}

	 
    function index() 
    {
        $this->load->helper('form');
        $data['titulo'] = "Eai Chegou? | Cadastro ";
        $data['empresas'] = $this->model->listar();
        $this->load->view('empresa_view.php', $data);
    }


    function inserir()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<span>','</span>');

        $this->form_validation->set_rules('escola','Escola','required|max_length[40]');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[40]');
        $this->form_validation->set_rules('senha','Senha','required|max_length[40]');
       

        if($this->form_validation->run()==FALSE){
            $this->index();
        }
        else
        {
            $data['escola'] = $this->input->post('escola');
            $data['email']  = $this->input->post('email');
            $data['senha']  = $this->input->post('senha');

            /* Chama a função inserir da empresa */
            if($this->model->inserir($data)){
                redirect('empresa');
            }
            else
                log_message('error','Error ao inserir Empresa');

        }

    }

    function editar($id){
        
        $data['titulo'] = "Empresa | Editar";

        $data['dados_empresa'] = $this->model->editar($id);

        $this->load->view('empresa_edit',$data);
    }

    function atualizar(){


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
            $data['id'] = $this->input->post('id');
            $data['escola'] = $this->input->post('escola');
            $data['email']  = $this->input->post('email');
            $data['senha']  = $this->input->post('senha');
     
            /* Executa a função atualizar do modelo passando como parâmetro os dados obtidos do formulário */
            if ($this->model->atualizar($data)) {
                redirect('empresa');
            } else {
                log_message('error', 'Erro ao atualizar a Empresa.');
            }
        }
    }


    function deletar($id){

        if($this->model->deletar($id)){
            redirect('empresa');
        }
        else
            log_message('error','Erro ao deletar empresa. ');

    }
    

}








