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
		$this->load->view('templates/order-header',$data);
		$this->load->view('pages/confirm-order',$data);
		$this->load->view('templates/material-footer');	
		
		
	}
	
	function form_order(){
		
		$data['title'] = ucfirst("Order Form"); // Capitalize the first letter
		$this->load->view('templates/order-header',$data);
		$this->load->view('pages/form-order',$data);
		$this->load->view('templates/material-footer');	
		
		
	}
	function submit_order()
		{
			
	$code = strtoupper(uniqid());
	
	$order = array(
		'party'=>$this->input->post('party'),
		'partytype'=>$this->input->post('partytype'),
		'zipcode'=>$this->input->post('zipcode'),
		'costumer_fname'=>$this->input->post('fname'),
		'costumer_email'=>$this->input->post('email'),
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
	      
		  $data['orders']= $this->Order_model->getOrderId($code)->row();
          $data ['email']= $this->input->post('email'); 
		  $data['code']=$code;
		  $data['title'] = ucfirst("Order Details");   
		  $message=$this->load->view('templates/mail_order_template',$data,TRUE);
		 
		  
		  $this->email->set_newline("\r\n");
		  $this->email->from('do_not_reply@event.design4web.dk','Order Verification @ EventFortuna' ); // change it to yours
		  $this->email->to($this->input->post('email'));// change it to yours
		  $this->email->subject('Order Details');
		  $this->email->message($message);
		 
            
         if($this->email->send()){
			 
			$this->load->view('templates/material-header',$data);
			$this->load->view('pages/thankyou',$data);
			$this->load->view('templates/material-footer');

		}
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
	
 function myorder(){
   $data['title'] = ucfirst("Bidders");  
   $data['results'] = $this->Order_model->trackBidders();
   $data['orders'] = $this->Order_model->track_orderby_id()->row(); 
   $data['errors']= ''; 
   
  if ($data > 0){
		$this->load->view('templates/material-header',$data);
		$this->load->view('pages/bidders_overview',$data);
		$this->load->view('templates/material-footer');
	
    }else{
	echo "No bidder yet";
  }
  
 }
}	