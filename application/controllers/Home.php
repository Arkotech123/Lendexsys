<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    var $session_user;

    function __construct() {
        parent::__construct();

        Utils::no_cache();
    }



    public function index() {
	
         
        $this->load->view('index');
		
    }
    
    


}
