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
         $this->load->model('Admin_model');
		 $this->load->model('Login_model');
		  
		 
		  
    }
	
	function dashboard($pages = 'dashboard')
	{		
		if($this->session->userdata('logged_in') && ($this->session->userdata('admin') == 1)){
		
			$data['user'] = $this->Login_model->getById()->row(); 
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
			$data['title'] = ucfirst("Barista");
			$data['user'] = $this->Login_model->getById()->row();
		if ($query = $this->Admin_model->user_count())
			 {
				$config = array();
				$config["base_url"] = base_url() . "Admin/show_barista";
				$total_row = $this->Admin_model->user_count();
				$config['total_rows'] = $total_row;
				$config['per_page']=5;
				$config['full_tag_open'] = '<ul class="pagination primary-text-color">';
				$config['full_tag_close'] = '</ul>';
				$config ['prev_tag_open'] = ' <li>';
				$config ['prev_tag_close'] = '</li>';
				$config ['next_tag_open'] = ' <li>';
				$config ['next_tag_close'] = '</li>';
				$config['num_tag_open'] = '<li>';
				$config['num_tag_close'] = '</li>';
				$config['use_page_numbers'] = False;
				$config['first_link'] = false;
				$config['last_link'] = false;
				$config['cur_tag_open'] = '<li class=" accent-color" ><a class="text-primary-color btn-primary active " href="">';
				$config['cur_tag_close'] = '</a></li>';
				$config['next_link'] = '<i class="material-icons active">fast_forward</i>';
				$config['prev_link'] = '<i class="material-icons active">fast_rewind</i>';
				$config['num_links'] = $total_row;
				
				$this->pagination->initialize($config);
				$offset = $this->uri->segment(3);
				
				$data['results'] = $this->Admin_model->fetch_user($config['per_page'],$offset);       
				$data['links'] = $this->pagination->create_links();
				$data['errors']= ''; 
				}
				 else {
					$data['errors']= 'No records Found'; 
					$data['links']= '';
					
				 }
		
			$this->load->view('templates/admin-material-header',$data);
			$this->load->view('admin/barista',$data);
			$this->load->view('templates/material-footer');
			
			}else{
				 redirect('Login/logout');
			}
		
	}
	function show_costumers(){
		
		if($this->session->userdata('logged_in') && ($this->session->userdata('admin') == 1)){
			$data['title'] = ucfirst("Barista");
			$data['user'] = $this->Login_model->getById()->row();
		if ($query = $this->Admin_model->orders_count())
			 {
				$config = array();
				$config["base_url"] = base_url() . "Admin/show_barista";
				$total_row = $this->Admin_model->orders_count();
				$config['total_rows'] = $total_row;
				$config['per_page']=5;
				$config['full_tag_open'] = '<ul class="pagination primary-text-color">';
				$config['full_tag_close'] = '</ul>';
				$config ['prev_tag_open'] = ' <li>';
				$config ['prev_tag_close'] = '</li>';
				$config ['next_tag_open'] = ' <li>';
				$config ['next_tag_close'] = '</li>';
				$config['num_tag_open'] = '<li>';
				$config['num_tag_close'] = '</li>';
				$config['use_page_numbers'] = False;
				$config['first_link'] = false;
				$config['last_link'] = false;
				$config['cur_tag_open'] = '<li class=" accent-color" ><a class="text-primary-color btn-primary active " href="">';
				$config['cur_tag_close'] = '</a></li>';
				$config['next_link'] = '<i class="material-icons active">fast_forward</i>';
				$config['prev_link'] = '<i class="material-icons active">fast_rewind</i>';
				$config['num_links'] = $total_row;
				
				$this->pagination->initialize($config);
				$offset = $this->uri->segment(3);
				
				$data['results'] = $this->Admin_model->fetch_orders($config['per_page'],$offset);       
				$data['links'] = $this->pagination->create_links();
				$data['errors']= ''; 
				}
				 else {
					$data['errors']= 'No records Found'; 
					$data['links']= '';
					
				 }
		
			$this->load->view('templates/admin-material-header',$data);
			$this->load->view('admin/costumer',$data);
			$this->load->view('templates/material-footer');
			
			}else{
				 redirect('Login/logout');
			}
	}
	function show_orders(){
		
		if($this->session->userdata('logged_in') && ($this->session->userdata('admin') == 1)){
			$data['title'] = ucfirst("Barista");
			$data['user'] = $this->Login_model->getById()->row();
		if ($query = $this->Admin_model->orders_count())
			 {
				$config = array();
				$config["base_url"] = base_url() . "Admin/show_barista";
				$total_row = $this->Admin_model->orders_count();
				$config['total_rows'] = $total_row;
				$config['per_page']=5;
				$config['full_tag_open'] = '<ul class="pagination primary-text-color">';
				$config['full_tag_close'] = '</ul>';
				$config ['prev_tag_open'] = ' <li>';
				$config ['prev_tag_close'] = '</li>';
				$config ['next_tag_open'] = ' <li>';
				$config ['next_tag_close'] = '</li>';
				$config['num_tag_open'] = '<li>';
				$config['num_tag_close'] = '</li>';
				$config['use_page_numbers'] = False;
				$config['first_link'] = false;
				$config['last_link'] = false;
				$config['cur_tag_open'] = '<li class=" accent-color" ><a class="text-primary-color btn-primary active " href="">';
				$config['cur_tag_close'] = '</a></li>';
				$config['next_link'] = '<i class="material-icons active">fast_forward</i>';
				$config['prev_link'] = '<i class="material-icons active">fast_rewind</i>';
				$config['num_links'] = $total_row;
				
				$this->pagination->initialize($config);
				$offset = $this->uri->segment(3);
				
				$data['results'] = $this->Admin_model->fetch_orders($config['per_page'],$offset);       
				$data['links'] = $this->pagination->create_links();
				$data['errors']= ''; 
				}
				 else {
					$data['errors']= 'No records Found'; 
					$data['links']= '';
					
				 }
		
			$this->load->view('templates/admin-material-header',$data);
			$this->load->view('admin/costumer',$data);
			$this->load->view('templates/material-footer');
			
			}else{
				 redirect('Login/logout');
			}
	}
	function show_bidding(){
		
		if($this->session->userdata('logged_in') && ($this->session->userdata('admin') == 1)){
			$data['title'] = ucfirst("Barista");
			$data['user'] = $this->Login_model->getById()->row();
		if ($query = $this->Admin_model->count_all_bids())
			 {
				$config = array();
				$config["base_url"] = base_url() . "Admin/show_barista";
				$total_row = $this->Admin_model->count_all_bids();
				$config['total_rows'] = $total_row;
				$config['per_page']=5;
				$config['full_tag_open'] = '<ul class="pagination primary-text-color">';
				$config['full_tag_close'] = '</ul>';
				$config ['prev_tag_open'] = ' <li>';
				$config ['prev_tag_close'] = '</li>';
				$config ['next_tag_open'] = ' <li>';
				$config ['next_tag_close'] = '</li>';
				$config['num_tag_open'] = '<li>';
				$config['num_tag_close'] = '</li>';
				$config['use_page_numbers'] = False;
				$config['first_link'] = false;
				$config['last_link'] = false;
				$config['cur_tag_open'] = '<li class=" accent-color" ><a class="text-primary-color btn-primary active " href="">';
				$config['cur_tag_close'] = '</a></li>';
				$config['next_link'] = '<i class="material-icons active">fast_forward</i>';
				$config['prev_link'] = '<i class="material-icons active">fast_rewind</i>';
				$config['num_links'] = $total_row;
				
				$this->pagination->initialize($config);
				$offset = $this->uri->segment(3);
				
				$data['results'] = $this->Admin_model->fetch_all_biddings($config['per_page'],$offset);       
				$data['links'] = $this->pagination->create_links();
				$data['errors']= ''; 
				}
				 else {
					$data['errors']= 'No records Found'; 
					$data['links']= '';
					
				 }
		
			$this->load->view('templates/admin-material-header',$data);
			$this->load->view('admin/barista',$data);
			$this->load->view('templates/material-footer');
			
			}else{
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