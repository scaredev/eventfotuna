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
		  
    }
	function pre_order(){
		
		if($this->Order_model->set_order_sess())
		{
		$data ['fname']= $this->session->userdata('fname');	
		$data ['party']= $this->session->userdata('party');	
		$data ['partytype']= $this->session->userdata('partytype');	
		$data ['zip']= $this->session->userdata('zipcode');	
		$data['title'] = ucfirst("Order confirmation"); // Capitalize the first letter
		$this->load->view('templates/material-header',$data);
		$this->load->view('pages/confirm-order',$data);
		$this->load->view('templates/material-footer');	
		
		}else
		
		{
		
		$this->session->set_flashdata('msg', '<span class="card-title primary-text-color">Oder Cannot be Process!<span>');
                         redirect('login/parallax');
		}
		
	}
	function submit_order()
		{
				
		if($this->Order_model->add_order())
			     
    {  
		
	  //email part
		
       //Format email content using an HTML file
          $data ['email']= $this->session->userdata('email'); 
		  $data['code']=$this->session->userdata('transaction_id');

		  $message=$this->load->view('templates/mail_template',$data,TRUE);
		 
		  
		  $this->email->set_newline("\r\n");
		  $this->email->from('do_not_reply@event.design4web.dk','Registration Verification @ EventFortuna' ); // change it to yours
		  $this->email->to($this->input->post('email'));// change it to yours
		  $this->email->subject('Email Verification');
		  $this->email->message($message);
		 
            
         if($this->email->send())
             {
			 redirect('Register/thankyou'); 
			exit();
             }
         else
        {
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
			
		$data['title'] = ucfirst("thankyou"); // Capitalize the first letter
		$this->load->view('templates/material-header',$data);
		$this->load->view('pages/thankyou',$data);
		$this->load->view('templates/material-footer');
	}
}	