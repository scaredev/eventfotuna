<?php
class login_model extends CI_Model
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
        
      $this->db->where('email', $this->input->post('email'));
      $this->db->where('password', md5($this->input->post('password')));
      $query = $this->db->get('user');
      if($query->num_rows > 0){
          return true;
      }
    }
	
	function validate_user( $email, $password ) {
	
    // Build a query to retrieve the user's details
    // based on the received username and password
    $this->db->from('user');
    $this->db->where('email',$email );
    $this->db->where( 'password', md5($password) );
    $login = $this->db->get()->result();

    // The results of the query are stored in $login.
    // If a value exists, then the user account exists and is validated
    if ( is_array($login) && count($login) == 1 ) {
        // Set the users details into the $details property of this class
        $this->details = $login[0];
        // Call set_session to set the user's session vars via CodeIgniter
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
            'id'=>$this->details->id,
            'name'=> $this->details->fname . ' ' . $this->details->lname,
            'email'=>$this->details->email,
            'avatar'=>$this->details->fname,
            
            'completed'=>$this->details->completed,
            'logged_in'=>true
        )
    );
}
	

}	