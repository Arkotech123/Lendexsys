<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Investdetails extends CI_Controller {

    var $session_user;

    function __construct() {
        parent::__construct();

        Utils::no_cache();
    }



    public function index() {
		$this->load->helper('url');
        $this->load->model('user_model');
        $this->load->library('session');

	    $userId=$this->session->userdata['userId'];
	    $data['title'] = 'Lendexsys';
        
        $this->global['pageTitle'] = 'Lendexsys';      
		$data['users']=$this->user_model->getUserInfos($userId);       

         $this->load->view('front/inc/header');
         $this->load->view('front/investdetails',$data);
		
    }
    
    


}
