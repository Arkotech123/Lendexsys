<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Invester extends CI_Controller {

    var $session_user;

    function __construct() {
        parent::__construct();

        Utils::no_cache();
    }



    public function index() {
	    $data['title'] = 'Invester';
        
        $this->global['pageTitle'] = 'Lendexsys : Invester';      

         $this->load->view('front/inc/header');
         $this->load->view('front/invester');
		
    }
    
    


}
