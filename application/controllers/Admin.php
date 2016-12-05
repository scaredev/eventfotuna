<?php 

class Admin extends CI_Controller{
 
	public function __construct()
    {
        parent::__construct();	
        		
		$this->load->helper(array('form','url'));		
          $this->load->library('session');
          $this->load->helper('html');
          $this->load->library('form_validation');
		  $this->load->database();
		  $this->load->library('pagination');
          //load the login model
         $this->load->model('Order_model');
		  
		 
		  
    }
	
	function dashboard($pages = 'dashboard')
	{		
		if($this->session->userdata('logged_in') && ($this->session->userdata('admin') == 1)){
		$data = array(
				'email'=> "cacuyado@gmail",
				'user'=> "crisnil",
				'company'=> "scardev"
		);
			$data ['company']= "scaredev" ;
			$data['title'] = ucfirst($pages); // Capitalize the first letter
			$this->load->view('templates/admin-material-header',$data);
			$this->load->view('admin/dashboard');
			$this->load->view('templates/material-footer');
		}
		else{
			redirect('Login/logout');
		}
	}
	
	function show_barista(){
		if($this->session->userdata('logged_in') && ($this->session->userdata('admin') == 1)){
		$data = array(
				'email'=> "cacuyado@gmail",
				'user'=> "crisnil",
				'company'=> "scardev"
		);
			$data ['company']= "scaredev" ;
			$data['title'] = ucfirst('barista listing'); // Capitalize the first letter
			$this->load->view('templates/admin-material-header',$data);
			$this->load->view('admin/barista');
			$this->load->view('templates/material-footer');
		}
		else{
			redirect('Login/logout');
		}
		
	}
	function show_costumers(){
		
		if($this->session->userdata('logged_in') && ($this->session->userdata('admin') == 1)){
		$data = array(
				'email'=> "cacuyado@gmail",
				'user'=> "crisnil",
				'company'=> "scardev"
		);
			$data ['company']= "scaredev" ;
			$data['title'] = ucfirst('costumer listing'); // Capitalize the first letter
			$this->load->view('templates/admin-material-header',$data);
			$this->load->view('admin/costumer');
			$this->load->view('templates/material-footer');
		}
		else{
			redirect('Login/logout');
		}
	}
	function show_orders(){
		
		if($this->session->userdata('logged_in') && ($this->session->userdata('admin') == 1)){
		$data = array(
				'email'=> "cacuyado@gmail",
				'user'=> "crisnil",
				'company'=> "scardev"
		);
			$data ['company']= "scaredev" ;
			$data['title'] = ucfirst('order listing'); // Capitalize the first letter
			$this->load->view('templates/admin-material-header',$data);
			$this->load->view('admin/orders');
			$this->load->view('templates/material-footer');
		}
		else{
			redirect('Login/logout');
		}
	}
	function show_closed_bidding(){
		
		if($this->session->userdata('logged_in') && ($this->session->userdata('admin') == 1)){
		$data = array(
				'email'=> "cacuyado@gmail",
				'user'=> "crisnil",
				'company'=> "scardev"
		);
			$data ['company']= "scaredev" ;
			$data['title'] = ucfirst('closed items'); // Capitalize the first letter
			$this->load->view('templates/admin-material-header',$data);
			$this->load->view('admin/closedbid');
			$this->load->view('templates/material-footer');
		}
		else{
			redirect('Login/logout');
		}
		
	}
	function accounts(){
		
		if($this->session->userdata('logged_in') && ($this->session->userdata('admin') == 1)){
		$data = array(
				'email'=> "cacuyado@gmail",
				'user'=> "crisnil",
				'company'=> "scardev"
		);
			$data ['company']= "scaredev" ;
			$data['title'] = ucfirst('accounts listing'); // Capitalize the first letter
			$this->load->view('templates/admin-material-header',$data);
			$this->load->view('admin/accounts_listing');
			$this->load->view('templates/material-footer');
		}
		else{
			redirect('Login/logout');
		}
		
	}
}