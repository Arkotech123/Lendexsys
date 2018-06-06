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
	
	 public function investinfo($user_Id) {
		$this->load->helper('url');
        $this->load->model('user_model');
        $this->load->library('session');

	    $userId=$this->session->userdata['userId'];
	    $data['title'] = 'Lendexsys';
        
        $this->global['pageTitle'] = 'Lendexsys';   
		$data['data_acc']=$this->user_model->getUserAccountByIds($user_Id);   
		$data['users']=$this->user_model->getUserInfos($userId); 
		$invester_id = $this->input->post('invester_id');
		$borrower_id = $this->input->post('borrower_id');
		$fund_date = $this->input->post('fund_date');
		$amount_first = $this->input->post('amount_first');
		$amount_second = $this->input->post('amount_second');
		$amount_third = $this->input->post('amount_third');
		 $userInfo = array(
		 'invester_id'=>$invester_id,
		 'borrower_id'=>$borrower_id,
		 'dateFunded'=>$fund_date,
		 'first_month'=> $amount_first,
         'second_month'=>$amount_second,
		 'third_month'=>$amount_third
		 );
		  $result = $this->user_model->addFunding($userInfo);
		  if($result > 0){
			  $this->load->view('front/inc/header');
        	 $this->load->view('front/investdetails',$data); 
		  }

        
		
    }
	
	 public function investment() {
		$this->load->helper('url');
         $this->load->view('front/inc/header');
         $this->load->view('front/investment');
		
    }
    
    


}
