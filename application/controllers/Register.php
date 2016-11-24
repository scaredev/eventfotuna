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
		  $this->load->library('email');
		  $this->load->library('encrypt');
		  $this->load->helper('typography');
     }
	 
function testmail(){



$this->email->from('fc@design4web.ph', 'Blabla');
$list = array('cacuyado@cec.edu.ph');
$this->email->to($list);
$this->email->reply_to('cacuyado@gmail.com', 'Explendid Videos');
$this->email->subject('This is an email test');
$this->email->message('It is working. Great!');
$this->email->set_newline("\r\n");
if( $this->email->send()){
      echo "<script>
            alert('Your Request was sent.');
			window.location.href='" . base_url() ."'
            </script>";
           
       }
     else
    {
      show_error($this->email->print_debugger());
      exit();
    }

}

public function registration()
 {
 
   if($this->Register_model->add_user())
   {  
	  //email part
		
       //Format email content using an HTML file
          $code ['email']= $this->session->userdata('email_verification_code'); 
		  $message = 'Dear User,\nPlease click on below URL or paste into your browser to verify your Email Address\n\n http://www.yourdomain.com/Login/verify".$code."\n"."\n\nThanks\nAdmin Team';
		  
		  $this->email->set_newline("\r\n");
		  $this->email->from('do_not_reply@event.design4web.dk','Post Master' ); // change it to yours
		  $this->email->to('cacuyado@gmail.com');// change it to yours
		  $this->email->subject('Email Verification');
		  $this->email->message($message);
		 
            
         if($this->email->send())
             {
			 echo "<script>
            alert('Your Request was sent.');
			
            </script>";
              redirect('Event/Thankyou'); 
			exit();
             }
         else
        {
         show_error($this->email->print_debugger());
        }
      
   }else{
   redirect('Register/ErrorRegistration');
   }
  
 }
 function registration2(){
	$data['title'] = ucfirst("Registration"); // Capitalize the first letter
			$this->load->view('templates/material-header',$data);
			$this->load->view('pages/regform2');
			$this->load->view('templates/material-footer');
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
 
 
 function ErrorRegistration()
 {	 
	 $data ['email']= $this->session->userdata('email'); 
			$data['title'] = ucfirst("Registration"); // Capitalize the first letter
			$this->load->view('templates/material-header',$data);
			$this->load->view('pages/error_reg');
			$this->load->view('templates/material-footer');
 }
 
}