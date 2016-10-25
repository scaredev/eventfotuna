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
	function submit_order($page='thankyou')
		{
		$data ['email'] = $this->input->post("email");	
		$this->Order_model->add_order();	
		
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$this->load->view('templates/header',$data);
		$this->load->view('pages/'.$page);
		$this->load->view('templates/footer');
	}
}	