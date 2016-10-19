<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Register extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
		  $this->load->helper('form');
          $this->load->library('session');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
          //load the login model
          $this->load->model('Register_model');
     }

public function registration()
 {
 
   $this->Register_model->add_user();
   $email = $this->input->post("email");
   $sessiondata = array(    
   'email' => $email,         
   'logged_in' => TRUE );
                        
 $this->session->set_userdata($sessiondata);
 redirect('Event/profile');
  
 }
}