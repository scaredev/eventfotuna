<?php
class Login_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
		 
     }
	var $details;
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
	 
      $this->db->from('user'); 
      $this->db->where('email', $this->input->post('email'));
      $this->db->where('password', md5($this->input->post('password')));
	  
      $query = $this->db->get('user');
      if($query->num_rows > 0){
		  $this->set_session();
          return true;
      }
    }
	
	function validate_user( $email, $password,$active ) {
	

    $this->db->from('user');
    $this->db->where('email',$email );
    $this->db->where( 'password', md5($password) );
	$this->db->where('active',$active );
    $login = $this->db->get()->result();

    
    if ( is_array($login) && count($login) == 1 ) {
        
        $this->details = $login[0];
        
        $this->set_session();
        return true;
    }

    return false;
	}
	function set_session() {
    // session->set_userdata is a CodeIgniter function that
    // stores data in a cookie in the user's browser.  Some of the values are built in
    // to CodeIgniter, others are added (like the IP address).  See CodeIgniter's documentation for details.
    $this->session->set_userdata( array(
            'id'=>$this->details->user_id,
            'name'=> $this->details->fname . ' ' . $this->details->lname,
            'email'=>$this->details->email,
            'avatar'=>$this->details->fname,
            //eemail-validated
			
            'completed'=>$this->details->completed,
            'logged_in'=>true
        )
    );
}
	function getById() 
    {     
        $this->db->where('email',$this->session->userdata('email'));
        return $this->db->get('user');
	
	}

}	