<?php
 
class Userfront extends CI_Controller {
 
public function __construct(){
 
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('user_model');
        $this->load->library('session');
 
}
public function index()
{
    $this->load->view("front/inc/header");
    $this->load->view("front/login");
    $this->load->view("front/inc/footer");
}

public function register_user()
  {
	
    $this->load->library('form_validation');
    $this->form_validation->set_rules('name', 'Full Name', 'trim|required');
	$this->form_validation->set_rules('email', 'Email Address', 'trim|required');
	$this->form_validation->set_rules('password', 'Password', 'trim|required');
	$this->form_validation->set_rules('address', 'Address', 'trim|required');
	$this->form_validation->set_rules('occupation', 'Occupation', 'trim|required');
	$this->form_validation->set_rules('social_security', 'Social Security', 'trim|required');
    if ($this->form_validation->run() == FALSE)
    {
      redirect('register');
    }
    else
    {
		
		$postUser = $this->uploadImage();
		if($postUser == false)
		{		
			redirect('register');

		}
		else
		{
		$email_check=$this->user_model->email_check($this->input->post('email'));
		if($email_check){
			$id=$this->user_model->register_user($postUser);
			if($id>0):
				redirect('registerationsuccessful');
			else:
				redirect('register');
			endif;
		}else{
			$this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  			redirect('register');
		}
     	}
	}
  }

public function login_view(){
 $this->load->view("front/inc/header");
$this->load->view("front/login.php");
 
}




function login_user(){
  $email=$this->input->post('email');
  $password=$this->input->post('password');
  
    $data=$this->user_model->login_user($email,$password);

      if($data)
      {
        $this->session->set_userdata('userId',$data['userId']);     
        $this->session->set_userdata('email',$data['email']);
        $this->session->set_userdata('user_name',$data['name']);
        $this->session->set_userdata('password',$data['password']);
        $this->session->set_userdata('address',$data['address']);
        $this->session->set_userdata('occupation',$data['occupation']);
        $this->session->set_userdata('social_security',$data['social_security']);
        $this->session->set_userdata('profile',$data['profile']);
		
		
        redirect('success');
      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try agaain.');
         redirect('signin');
      }
     
 
}

/*User Profile*/

function user_profile(){
 
$this->load->view('front/user_profile.php');
 
}
/*User Logout*/

public function updateProfile()
  {
	
    $this->load->library('form_validation');
    $this->form_validation->set_rules('routing', 'Routing Number', 'trim|required');
	$this->form_validation->set_rules('checking', 'Checking', 'trim|required');
	
    if ($this->form_validation->run() == FALSE)
    {
      redirect('success');
    }
    else
    {
		
		$postRouting = $this->payStub();
		if($postRouting == false)
		{		
			redirect('success');

		}
		else
		{
			$id=$this->user_model->updateProfile($postRouting);
			if($id>0):
				redirect('borower');
			else:
				redirect('success');
			endif;
		
     	}
	}
  }
  
  public function updateAmount($userId)
  {
	
    $this->load->library('form_validation');
    $this->form_validation->set_rules('amount', 'Amount', 'trim|required');
	
    if ($this->form_validation->run() == FALSE)
    {
      redirect('borower');
    }
    else
    {
		
		
			$id=$this->user_model->updateAmount($userId);
			if($id>0):
				redirect('investdetails');
			else:
				redirect('borower');
			endif;
		
     	
	}
  }
  
  
public function user_logout(){

  $this->session->sess_destroy();
  $this->session->set_flashdata('success_msg', 'Logout successfully');
  redirect('signin');
}

 function uploadImage(){
	  $folder_path = 'uploads/profile/';
 
	 $config['upload_path'] = $folder_path;
	       
	   if(is_dir($folder_path == FALSE))
					{
  				 mkdir($folder_path,077);
					 }	

		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '4000';
		$config['max_width']  = '3000';
		$config['max_height']  = '2000';
		$config['encrypt_name'] = 'TRUE';
        $config['overwrite'] = 'TRUE';
		$this->load->library('upload', $config);
		if ( !$this->upload->do_upload('image'))
		{
    return false;
   }
		else
		{
			$data = $this->upload->data();
 			 return $data;
			}
  }
  
  function payStub(){
	  $folder_path = 'uploads/paystub/';
 
	 $config['upload_path'] = $folder_path;
	       
	   if(is_dir($folder_path == FALSE))
					{
  				 mkdir($folder_path,077);
					 }	

		$config['allowed_types'] = '*';
		$config['max_size']	= '4000';
		$config['max_width']  = '3000';
		$config['max_height']  = '2000';
		$config['encrypt_name'] = 'TRUE';
        $config['overwrite'] = 'TRUE';
		$this->load->library('upload', $config);
		if ( !$this->upload->do_upload('image'))
		{
    return false;
   }
		else
		{
			$data = $this->upload->data();
 			 return $data;
			}
  }

}