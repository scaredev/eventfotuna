<?php

class Register_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
		 
     }

public function add_user()
 {
  $data=array(
    'company'=>$this->input->post('company'),
    'email'=>$this->input->post('email'),
    'password'=>md5($this->input->post('password')),
	'mobile'=>$this->input->post('mobile'),
	'cart_type'=>$this->input->post('cart-type')	
  );
  $this->db->insert('user',$data);
 }
}