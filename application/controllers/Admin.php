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
}