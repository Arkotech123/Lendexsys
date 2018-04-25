<?php
 
class User extends CI_Controller {
 
public function __construct(){
 
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('user_model');
        $this->load->library('session');
 
}
 
public function index()
{
$this->load->view("register.php");
}
 
public function register_user(){
 
      $user=array(
      'name'=>$this->input->post('name'),
      'email'=>$this->input->post('email'),
      'password'=>md5($this->input->post('password')),
      'address'=>$this->input->post('address'),
      'Occupation'=>$this->input->post('occupation'),
      'social_security'=>$this->input->post('social_security'),
      'profile'=>$this->input->post('profile')
        );
        print_r($user);
 
$email_check=$this->user_model->email_check($user['email']);
 
if($email_check){
  $this->user_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('user/login_view');
 
}
else{
 
  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('user');
 
 
}
 
}
 
public function login_view(){
 
$this->load->view("login.php");
 
}
 
function login_user(){
  $user_login=array(
 
  'email'=>$this->input->post('email'),
  'password'=>md5($this->input->post('password'))
 
    );
 
    $data=$this->user_model->login_user($user_login['email'],$user_login['password']);
      if($data)
      {
        $this->session->set_userdata('userId',$data['userId']);
        $this->session->set_userdata('email',$data['email']);
        $this->session->set_userdata('name',$data['name']);
        $this->session->set_userdata('address',$data['address']);
        $this->session->set_userdata('occupation',$data['occupation']);
        $this->session->set_userdata('social_security',$data['social_security']);
        $this->session->set_userdata('profile',$data['profile']);
 
        $this->load->view('user_profile.php');
 
      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view("login.php");
 
      }
 
 
}
 
function user_profile(){
 
$this->load->view('user_profile.php');
 
}
public function user_logout(){
    session_start(); 
    session_destroy();
    unset($_SESSION); 
  $this->session->sess_destroy();
  redirect('user/login_view', 'refresh');
}

 
}
 
?>