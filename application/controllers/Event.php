<?php 

class Event extends CI_Controller{
 
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
		
		if($this->session->userdata('logged_in')){
			$data ['email']= $this->session->userdata('email'); 
			$data['title'] = ucfirst($pages); // Capitalize the first letter
			$this->load->view('templates/admin-header',$data);
			$this->load->view('pages/'.$pages);
			$this->load->view('templates/admin-footer');
		}else{
				   redirect('Login');
		}
	}
	function history($pages = 'history')
	{
		if($this->session->userdata('logged_in')){
			$data ['email']= $this->session->userdata('email'); 
			$data['title'] = ucfirst($pages); // Capitalize the first letter
			
		if ($query = $this->Order_model->bid_count())
			 {
				$config = array();
				$config["base_url"] = base_url() . "Event/history";
				$total_row = $this->Order_model->bid_count();
				$config["total_rows"] = $total_row;
				$config['full_tag_open'] = '<ul class="pager">';
				$config['full_tag_close'] = '</ul>';
				
				$config ['prev_tag_open'] = ' <li>';
				$config ['prev_tag_close'] = '</li>';
				$config ['next_tag_open'] = ' <li>';
				$config ['next_tag_close'] = '</li>';
				$config['num_tag_open'] = '<li>';
				$config['num_tag_close'] = '</li>';
				$config["per_page"] = 10;
				$config['use_page_numbers'] = TRUE;
				
				
				$config['first_link'] = false;
				$config['last_link'] = false;
				
				$config['cur_tag_open'] = '<li class="disabled active" ><a class=" btn-primary" href="">';
				$config['cur_tag_close'] = '</a></li>';
				$config['next_link'] = 'Next';
				$config['prev_link'] = 'Previous';
				//
				//
				$config['num_links'] = $total_row;
				$this->pagination->initialize($config);
				$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
				
				$data['results'] = $this->Order_model->fetch_bid_data($config['per_page'],$page);       
				$data['links'] = $this->pagination->create_links();
				$data['errors']= ''; 
				}
				 else {
					$data['errors']= ''; 
					$data['links']= '';
					$this->load->view('templates/admin-header',$data);
					$this->load->view('pages/history');
					$this->load->view('templates/admin-footer');
				 }
			
			$this->load->view('templates/admin-header',$data);
			$this->load->view('pages/history');
			$this->load->view('templates/admin-footer');
			}
		
	}
	function overview($pages ='overview')
	{
		if($this->session->userdata('logged_in'))
			{
			$data ['email']= $this->session->userdata('email'); 
			$data['title'] = ucfirst($pages); // Capitalize the first letter
			
			
			
				if ($query = $this->Order_model->record_count())
			 {
				$config = array();
				$config["base_url"] = base_url() . "Event/overview";
				$total_row = $this->Order_model->record_count();
				$config["total_rows"] = $total_row;
				$config['full_tag_open'] = '<ul class="pager">';
				$config['full_tag_close'] = '</ul>';
				
				$config ['prev_tag_open'] = ' <li>';
				$config ['prev_tag_close'] = '</li>';
				$config ['next_tag_open'] = ' <li>';
				$config ['next_tag_close'] = '</li>';
				$config['num_tag_open'] = '<li>';
				$config['num_tag_close'] = '</li>';
				$config["per_page"] = 10;
				$config['use_page_numbers'] = TRUE;
				
				
				$config['first_link'] = false;
				$config['last_link'] = false;
				
				$config['cur_tag_open'] = '<li class="disabled active" ><a class=" btn-primary" href="">';
				$config['cur_tag_close'] = '</a></li>';
				$config['next_link'] = 'Next';
				$config['prev_link'] = 'Previous';
				//
				//
				$config['num_links'] = $total_row;
				$this->pagination->initialize($config);
				$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
				
				$data['results'] = $this->Order_model->fetch_data($config['per_page'],$page);       
				$data['links'] = $this->pagination->create_links();
				$data['errors']= ''; 
				}
				 else {
					$data['errors']= ''; 
					$data['links']= '';
					$this->load->view('templates/admin-header',$data);
					$this->load->view('pages/overview');
					$this->load->view('templates/admin-footer');
				 }
			
			$this->load->view('templates/admin-header',$data);
			$this->load->view('pages/overview');
			$this->load->view('templates/admin-footer');
			}
			
	}
	
	function calendarview ($pages = 'calendar')
	{
		if($this->session->userdata('logged_in')){
			$data ['email']= $this->session->userdata('email'); 
			$data['title'] = ucfirst($pages); // Capitalize the first letter
			
		$prefs['template'] = 
		'{table_open}<table class="calendar table table-bordered">{/table_open}
		{week_day_cell}<th class="day_header">{week_day}</th>{/week_day_cell}
		{cal_cell_content}<span class="day_listing">{day}</span>&nbsp;&bull; {content}&nbsp;{/cal_cell_content}
		{cal_cell_content_today}<div class="today"><span class="day_listing">{day}</span>&bull; {content}</div>{/cal_cell_content_today}
		{cal_cell_no_content}<span class="day_listing">{day}</span>&nbsp;{/cal_cell_no_content}
		{cal_cell_no_content_today}<div class="today"><span class="day_listing">{day}</span></div>{/cal_cell_no_content_today}
	'; 		
		$prefs['day_type'] = 'long'; 
		
		$prefs['show_next_prev' ] = TRUE;
		$prefs['next_prev_url' ] = site_url('Event/calendarview');
		
		$datas = array(
				3  => 'Sample Event',
				7  => 'Delivery Private Party',
				13 => 'Pary - 3472 Florida St.',
				26 => 'The Purge!'
		);
		   
			$this->load->library('calendar', $prefs);
			 $data['calendar'] = $this->calendar->generate('', '', $datas);
			$this->load->view('templates/admin-header',$data);
			$this->load->view('pages/'.$pages,$data);
			$this->load->view('templates/admin-footer');
		}else{
				   redirect('Login');
		}
	}
	//https://maps-generator.com
	
	function profile($page = 'profile')
	{
		if($this->session->userdata('logged_in')){
			$data ['email']= $this->session->userdata('email'); 
			$data['title'] = ucfirst("profile"); // Capitalize the first letter
			
			$this->load->model('Login_model');
			$data['user'] = $this->Login_model->getById()->row();  
			$this->load->view('templates/admin-header',$data);
			$this->load->view('pages/'.$page);
			$this->load->view('templates/admin-footer');
		}else{
				   redirect('Login');
		}
	}
		function materialprof()
	{
		if($this->session->userdata('logged_in')){
			$data ['email']= $this->session->userdata('email'); 
			$data['title'] = ucfirst("profile"); // Capitalize the first letter
			
			$this->load->model('Login_model');
			$data['user'] = $this->Login_model->getById()->row();  
			$this->load->view('templates/material-header',$data);
			$this->load->view('pages/material-profile');
			$this->load->view('templates/material-footer');
		}else{
				   redirect('Login');
		}
	}
	function cashier($page = 'cashier')
	{
		if($this->session->userdata('logged_in')){
			$data ['email']= $this->session->userdata('email'); 
			$data['title'] = ucfirst($page); // Capitalize the first letter
			$this->load->view('templates/admin-header',$data);
			$this->load->view('pages/'.$page);
			$this->load->view('templates/admin-footer');
		}else{
				   redirect('Login');
		}
	}
	function settings($page = 'settings')
	{
		if($this->session->userdata('logged_in')){
			$data ['email']= $this->session->userdata('email'); 
			$data['title'] = ucfirst($page); // Capitalize the first letter
			$this->load->view('templates/admin-header',$data);
			$this->load->view('pages/'.$page);
			$this->load->view('templates/admin-footer');
		}else{
				   redirect('Login');
		}
	}
  
}	