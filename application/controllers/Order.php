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
		$data ['name']= $this->session->userdata('name');	
		$data ['party']= $this->session->userdata('party');	
		$data ['partytype']= $this->session->userdata('partytype');	
		$data ['zip']= $this->session->userdata('zipcode');	
		$data['title'] = ucfirst("Order confirmation"); // Capitalize the first letter
		$this->load->view('templates/material-header',$data);
		$this->load->view('pages/confirm-order',$data);
		$this->load->view('templates/material-footer');	
		}else{
		
		$this->session->set_flashdata('msg', '<span class="card-title primary-text-color">Oder Cannot be Process!<span>');
                         redirect('login/parallax');
		}
		
	}
	function submit_order($page='thankyou')
		{
		$data ['email'] = $this->input->post("inputemail");	
		
			$this->Order_model->add_order();	
		
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$this->load->view('templates/header',$data);
		$this->load->view('pages/'.$page);
		$this->load->view('templates/footer');
	}
}	