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
    'username'=>$this->input->post('user_name'),
    'email'=>$this->input->post('email_address'),
    'password'=>md5($this->input->post('password'))
  );
  $this->db->insert('user',$data);
 }
}