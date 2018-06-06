<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Congrats extends CI_Controller {

    var $session_user;

    function __construct() {
        parent::__construct();
		$this->load->helper('url');
        $this->load->model('user_model');
        $this->load->library('session');

        Utils::no_cache();
    }



    public function index() {
		$userId=$this->session->userdata['userId'];
		$data['user_account']=$this->user_model->getUserAccountById($userId);
		$data['users']=$this->user_model->getUserInfos($userId);   
	    $data['title'] = 'Lendexsys';
        
        $this->global['pageTitle'] = 'Lendexsys';      

         $this->load->view('front/inc/header');
         $this->load->view('front/congrats',$data);
		
    }
    
    


}
