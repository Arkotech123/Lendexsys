<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    var $session_user;

    function __construct() {
        parent::__construct();

        if(isset($this->session->userdata['name'])){
            redirect('success');
        }
        
 
        Utils::no_cache();
    }



    public function index() {

        $data['title'] = 'Lendexsys';
        
        $this->global['pageTitle'] = 'Lendexsys| Register';      

         $this->load->view('front/inc/header');
         $this->load->view('front/register');
         $this->load->view('front/inc/footer');
		
    }
	
	 public function lender() {

        $data['title'] = 'Lendexsys';
        
        $this->global['pageTitle'] = 'Lendexsys| Register Lender';      

         $this->load->view('front/inc/header');
         $this->load->view('front/lender');
         $this->load->view('front/inc/footer');
		
    }
    
    


}
