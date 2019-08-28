<?php

class Login extends CI_Controller {
 
  

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
        $data['titulo'] = "Eai Chegou? | Login - Cadastro ";
        //$data['empresas'] = $this->model->listar();
        $this->load->view('login_view.php', $data);
    }


    function entrar(){
    
    	$nome = $this->input->post('usuario');
    	$senha = $this->input->post('senha');

    	echo "Usuairo ".$nome." Senha ".$senha."<br>";
    	

    	if(empty($nome) || empty($senha) ){
			$this->index();
        }
		else
        {
			
			$data['escola'] = $nome;
			$data['senha'] = $senha;

			$ok = $this->model->Valida($data);
            
            if($ok!="error"){
                echo $ok["id"];
                echo $ok["nome"];

                $_SESSION["Nome"] = $ok["nome"];
                $_SESSION["ID"] = $ok["id"];

                redirect('Painel');
            }
            else
                $this->index();
           
		}
    }

}