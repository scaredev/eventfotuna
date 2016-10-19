<?php
class login_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
		 
     }

    function validate(){
        
      $this->db->where('email', $this->input->post('email'));
      $this->db->where('password', md5($this->input->post('password')));
      $query = $this->db->get('user');
      return $query->num_rows();
	  
      //if($query->num_rows == 1){
      //    return true;
     // }
    }
	function valid(){
        
      $this->db->where('email', $this->input->post('email'));
      $this->db->where('password', md5($this->input->post('password')));
      $query = $this->db->get('user');
      if($query->num_rows > 0){
          return true;
      }
    }
}	