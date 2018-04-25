<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Borrower extends CI_Controller {

    var $session_user;

    function __construct() {
        parent::__construct();

        Utils::no_cache();
    }



    public function index() {
	    $data['title'] = 'Borrower';
        
        $this->global['pageTitle'] = 'Lendexsys : Borrower';      

         $this->load->view('forms/inc/header');
         $this->load->view('forms/borrower');
         $this->load->view('forms/inc/footer');
		
    }
    
    


}
