<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Home extends CI_Controller {
 
  

    function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
        $this->load->library('session');
		
	}
	 
    function index() 
    {
        $this->load->helper('form');
        $data['titulo'] = "Inicio | Chegou?";

        $this->load->view('home_view.php', $data);
        
    }

}