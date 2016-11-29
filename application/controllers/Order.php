<?php 

class Order extends CI_Controller{
    
	
     
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
          $this->load->model('Order_model');
		  $this->load->library('email');
		  $this->load->library('encrypt');
		  $this->load->helper('typography');
		  
    }
	function pre_order(){
		$data = array(
            'fname'=>$this->input->post("fname"),
            'party'=>$this->input->post("party"),
			'zipcode'=>$this->input->post("zipcode"),
            'partytype'=>$this->input->post("partytype")
            //email-validated
		);
		
		$data['title'] = ucfirst("Order confirmation"); // Capitalize the first letter
		$this->load->view('templates/material-header',$data);
		$this->load->view('pages/confirm-order',$data);
		$this->load->view('templates/material-footer');	
		
		
	}
	function submit_order()
		{
			
	$code = strtoupper(uniqid());
	
	$order = array(
		'party'=>$this->input->post('party'),
		'partytype'=>$this->input->post('partytype'),
		'zipcode'=>$this->input->post('zipcode'),
		'fname'=>$this->input->post('fname'),
		'email'=>$this->input->post('email'),
		'tel'=>$this->input->post('tel'),
		'eventdate'=>$this->input->post('eventdate_submit'),
		'participants'=>$this->input->post('participants'),
		'address'=> $this->input->post('address'),
		'completed'=>"0",
		'winner_id'=>"0",	
		'transaction_id'=>$code	
		);	
		
		if($this->Order_model->add_order($order))
			     
    {  
		
	  //email part
		
       //Format email content using an HTML file
          $data ['email']= $this->input->post('email'); 
		  $data['code']=$code;

		  $message=$this->load->view('templates/mail_template',$data,TRUE);
		 
		  
		  $this->email->set_newline("\r\n");
		  $this->email->from('do_not_reply@event.design4web.dk','Registration Verification @ EventFortuna' ); // change it to yours
		  $this->email->to($this->input->post('email'));// change it to yours
		  $this->email->subject('Email Verification');
		  $this->email->message($message);
		 
            
         if($this->email->send()){
			echo "Email Sent";   }
         else   {
         show_error($this->email->print_debugger());
				}
      
    }
     else
    {
      echo "<script>
            alert('Opps Something went wrong!.');
            window.location.href='" . base_url() ."'
            </script>";
            
      exit();
    }
	}
	
	function verify($verificationText=NULL){
	 
  $noRecords = $this->Order_model->verifyOrder($verificationText);  
  if ($noRecords > 0){
   $error = "Email Verified Successfully!"; 
  }else{
   $error = "Sorry Unable to Verify Your Email!"; 
  }
  $data['errormsg'] = $error; 
  $data['title'] = ucfirst("Registration"); // Capitalize the first letter
			$this->load->view('templates/material-header',$data);
			$this->load->view('pages/email_verified',$data);
			$this->load->view('templates/material-footer');
 }
}	