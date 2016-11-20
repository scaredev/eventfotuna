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
		  $this->load->helper('string');
          //load the login model
          $this->load->model('Register_model');
     }

public function registration()
 {
 
   if($this->Register_model->add_user())
   {  
	  
      redirect('Event/Thankyou');
   }else{
   redirect('Register/Error');
   }
  
 }
 function verify($verificationText=NULL){  
  $noRecords = $this->Register_model->verifyEmailAddress($verificationText);  
  if ($noRecords > 0){
   $error = array( 'success' => "Email Verified Successfully!"); 
  }else{
   $error = array( 'error' => "Sorry Unable to Verify Your Email!"); 
  }
  $data['errormsg'] = $error; 
  $this->load->view('index.php', $data);   
 }
 function sendVerificationEmail(){  
  $this->Register_model->sendVerificatinEmail("yashwantchavan@technicalkeeda.com","13nRGi7UDv4CkE7JHP1o");
  $this->load->view('index.php', $data);   
 }
 
}