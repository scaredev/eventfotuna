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
		'password'=>md5($this->input->post('password')),
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
		$sess_data= $data;
		$sess_data= array(
		'log_in'=>TRUE
		);
		 $this->session->set_userdata($sess_data);
		 return true;
	  }
 }  
}



