<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class Dashboard extends CI_Controller {

    var $session_user;

    function __construct() {
        parent::__construct();
		 //$this->isLoggedIn();   
        Utils::no_cache();
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url('auth/login'));
            exit;
        }
        $this->session_user = $this->session->userdata('logged_in');
        
    }

    /*
     * 
     */ 

    public function index() {
       
 		$data['title'] = 'Dashboard';
        
        $this->global['pageTitle'] = 'Lendexsys : Dashboard';
        

         $this->load->view('dashboard/includes/header');
		 $this->load->view('dashboard/dashboard');
		 $this->load->view('dashboard/includes/footer');
    }
}

