<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Terms extends CI_Controller {

    var $session_user;

    function __construct() {
        parent::__construct();

        Utils::no_cache();
    }



    public function index() {
	    $data['title'] = 'Terms';
        
        $this->global['pageTitle'] = 'Lendexsys : Terms';      

         $this->load->view('forms/inc/header');
         $this->load->view('forms/terms');
         $this->load->view('forms/inc/footer');
		
    }
    
    


}
