<?php
/**
* 
*/
class Email extends CI_Controller
{
	
	
	function index()
	{
		$this->load->view('forms/lender');
	}
	function sent(){

		$data['type'] = $this->input->post('type');
		$data['name'] = $this->input->post('name');

		$data['email'] = $this->input->post('email');
		$data['phone'] = $this->input->post('phone');
		$data['lender'] = $this->input->post('lender');
		$data['amount'] = $this->input->post('amount');
		$data['terms'] = $this->input->post('terms');
		$data['range'] = $this->input->post('range');
		//$type=$this->input->post('type');
		$email=$data['email'];
		if ($data['type'] == 'borrow') {
			$data['radios'] = $this->input->post('radios');
			# code...
		}
		 $config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://host275.hostmonster.com',
			'smtp_port' => 465,
			'smtp_user' => 'info@lendexsys.com',
			'smtp_pass' => 'Steven123@',
			'mailtype'  => 'html',     
			'charset'   => 'iso-8859-1'
		);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('info@lendexsys.com', 'lendexsys');
		$this->email->to('info@lendexsys.com');

		if ($data['type'] == 'borrow'){
		$this->email->subject('Borrow Registration Verification:');
		//$message = "Thanks for signing up! Your account has been created...!";
		}
		else{
		$this->email->subject('Lender Registration Verification:');
		//$message = "Thanks for signing up! Your account has been created...!";
		}
		$body = $this->load->view('email.php',$data, true);
		$this->email->message($body);
		$this->email->send();
		
		   
		$this->load->view('forms/inc/header');
         $this->load->view('forms/thankyou');
         $this->load->view('forms/inc/footer');


	
}
}
