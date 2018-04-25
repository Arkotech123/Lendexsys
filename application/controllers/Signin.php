<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {

    var $session_user;

    function __construct() {
       
        if(isset($this->session->userdata['name'])){
            redirect('success');
        }
       
    }



    public function index() {
	    


        $data['title'] = 'Lendexsys';
        
        $this->global['pageTitle'] = 'Lendexsys| Signin';      

         $this->load->view('front/inc/header');
         $this->load->view('front/login');
         $this->load->helper('form');
         $this->load->view('front/inc/footer');
		
    }


    public function user_signin(){

        $this->load->Library('form_validation');

        $this->form_validation->set_rules('username','User Name','required|trim');
        $this->form_validation->set_rules('password','Password','required');

        if ($this->form_validation->run()) {

            $username = $this->input->post('$username');
            $password = $this->input->post('$password');
            $this->load->view('front/inc/header');
            $this->load->model('Signin_model');
            
            if( $this->Signin_model->validate_login($username,$password) ) {
                    #Login Success*/
                echo"Login Successfull";
                }else{
                    #Login Faild
            }
        }else{
            $this->load->view('front/inc/header');
            $this->load->view('front/login');
            $this->load->view('front/inc/footer');
        }
    }
    
    


}
