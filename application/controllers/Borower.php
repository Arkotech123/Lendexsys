<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Borower extends CI_Controller {

    var $session_user;

    function __construct() {
        parent::__construct();

        Utils::no_cache();
		 $this->load->model('user_model');
    }



    public function index() {
		$userId=$this->session->userdata['userId'];
	    $data['title'] = 'Borrower';
        
        $this->global['pageTitle'] = 'Lendexsys : Borrower'; 
		
		$data['users']=$this->user_model->getUserInfos($userId);     

         $this->load->view('front/inc/header');
         $this->load->view('front/borower',$data);
		
    }
	
	
	
    
    


}
