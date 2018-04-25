<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lender extends CI_Controller {

    var $session_user;

    function __construct() {
        parent::__construct();

        Utils::no_cache();
    }



    public function index() {
	    $data['title'] = 'Lender';
        
        $this->global['pageTitle'] = 'Lendexsys : Lender';      

         $this->load->view('forms/inc/header');
         $this->load->view('forms/lender');
         $this->load->view('forms/inc/footer');
		
    }
    
    


}
