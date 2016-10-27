<?php 

class Bid extends CI_Controller{
 
	public function __construct()
    {
        parent::__construct();		
		$this->load->helper(array('form','url'));		
          $this->load->library('session');
          $this->load->helper('html');
          $this->load->database();
	      $this->load->model('Bid_model');
		  
		 
		  
    }
	
	function submit_bid()
	{
		$this->Bid_model->add_bid();
			
        redirect('Event/overview'); 
		
    
	}
}