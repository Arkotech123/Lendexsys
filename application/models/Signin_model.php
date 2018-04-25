<?php
/**
* User Login Model
*/
class Signin_model extends CI_Model{

	 public function validate_login($username,$password)
	 {
	 	

	 	$q= $this->db->where(['email'=>'$username','password','$password'])
	 				->get('tbl_users');

	 	if ($q->num_rows() ) {
	 		return TRUE;
	 	}else{

	 	return FALSE;
	 	}
	 }
}