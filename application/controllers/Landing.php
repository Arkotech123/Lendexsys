<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

    var $session_user;

    function __construct() {
        parent::__construct();

        Utils::no_cache();
    }



    public function index() {
	    $data['title'] = 'Lendexsys';
        
        $this->global['pageTitle'] = 'Lendexsys';      

         $this->load->view('front/inc/header');
         $this->load->view('front/landing');
         $this->load->view('front/inc/footer');
		
    }
    
    


}
