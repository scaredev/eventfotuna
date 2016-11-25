<?php

class Register_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
		  
     }


 function add_user(){
	  $code = random_string('alnum',20);
	  
	  $data=array(
		'company'=>$this->input->post('company'),
		'email'=>$this->input->post('email'),
		'password'=> md5($this->input->post('password')),
		'mobile'=>$this->input->post('mobile'),
		'cart_type'=>$this->input->post('cart-type'),
		'fname'=>$this->input->post('fname'),
		'email_verification_code'=>$code
	  );
	 
	 $this->db->from('user');
     $this->db->where('email',$this->input->post('email'));
	 $login = $this->db->get()->result();

    if ( is_array($login) && count($login) == 1 ) {
        return false;
    }
	else{
		$this->db->insert('user',$data);	
		
		 $this->session->set_userdata($data);
		 return true;
	  }
 }
	function verifyEmailAddress($verificationcode){  
	  $sql = "update trn_user set active_status='A' WHERE email_verification_code=?";
	  $this->db->query($sql, array($verificationcode));
	  return $this->db->affected_rows(); 
	 }
 
	 function verifyEmail($verificationcode){ 
	 
	    $value= 1;
		$data = array(
				   'active' => $value  
				);
	 
		$this->db->from('user');
		$this->db->where('email_verification_code',$this->uri->segment(2));
		$this->db->update('user', $data); 
		return $this->db->affected_rows(); 
	 }
}



