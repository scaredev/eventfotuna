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
			
			$data['title'] = ucfirst("history"); // Capitalize the first letter
			
		if ($query = $this->Order_model->bid_count())
			 {
				$config = array();
				$config["base_url"] = base_url() . "Event/history";
				$total_row = $this->Order_model->bid_count();
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
				
				$data['results'] = $this->Order_model->fetch_bid_data($config['per_page'],$offset);       
				$data['links'] = $this->pagination->create_links();
				$data['errors']= ''; 
				}
				 else {
					$data['errors']= ''; 
					$data['links']= '';
					$this->load->view('templates/login-material-header',$data);
					$this->load->view('pages/material-history');
					$this->load->view('templates/material-footer');
				 }
			$this->load->model('Login_model');
			$data['user'] = $this->Login_model->getById()->row(); 
			$this->load->view('templates/login-material-header',$data);
			$this->load->view('pages/material-history');
			$this->load->view('templates/material-footer');
			}
		
	}
	function overview()
	{
		if($this->session->userdata('logged_in'))
			{
			
			$data['title'] = ucfirst("overview"); // Capitalize the first letter
			
			
			
				if ($query = $this->Order_model->record_count())
			 {
				$config = array();
				$config["base_url"] = base_url() . "Event/overview";
				$total_row = $this->Order_model->record_count();
				
				$config['total_rows'] = $total_row;
				$config['per_page']=10;
				$config['full_tag_open'] = '<ul class="pagination primary-text-color">';
				$config['full_tag_close'] = '</ul>';
				$config ['prev_tag_open'] = ' <li>';
				$config ['prev_tag_close'] = '</li>';
				$config ['next_tag_open'] = ' <li>';
				$config ['next_tag_close'] = '</li>';
				$config['num_tag_open'] = '<li>';
				$config['num_tag_close'] = '</li>';
				$config['page_query_string'] = True;
				$config['use_page_numbers'] =True;
				$config['first_link'] = false;
				$config['last_link'] = false;
				$config['cur_tag_open'] = '<li class=" accent-color" ><a class="text-primary-color btn-primary active " href="">';
				$config['cur_tag_close'] = '</a></li>';
				$config['next_link'] = '<i class="material-icons active">fast_forward</i>';
				$config['prev_link'] = '<i class="material-icons active">fast_rewind</i>';
				$config['num_links'] = $total_row;
				
				$this->pagination->initialize($config);
				$page = $this->uri->segment(3);
				
				$data['results'] = $this->Order_model->fetch_data($config['per_page'],$page);       
				$data['links'] = $this->pagination->create_links();
				$data['errors']= ''; 
				}
				 else {
					$this->load->model('Login_model');
					$data['user'] = $this->Login_model->getById()->row();  
					$data['errors']= ''; 
					$data['links']= '';
					$this->load->view('templates/login-material-header',$data);
					$this->load->view('pages/material-overview');
					$this->load->view('templates/material-footer');
				 }
			$this->load->model('Login_model');
			$data['user'] = $this->Login_model->getById()->row();  
			$this->load->view('templates/login-material-header',$data);
			$this->load->view('pages/material-overview');
			$this->load->view('templates/material-footer');
			}
			
	}
	
	function calendarview ()
	{
		if($this->session->userdata('logged_in')){
			
			$data['title'] = ucfirst("Calendar"); // Capitalize the first letter
		$this->load->model('Login_model');
		$data['user'] = $this->Login_model->getById()->row();  	
		$prefs['template'] = 
		'
		{table_open}<table class="picker_table "border="0" cellpadding="0" cellspacing="0">{/table_open}

        {heading_row_start}<tr >{/heading_row_start}

        {heading_previous_cell}<th ><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
        {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
        {heading_next_cell}<th ><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

        {heading_row_end}</tr>{/heading_row_end}

        {week_row_start}<tr>{/week_row_start}
        {week_day_cell}<td>{week_day}</td>{/week_day_cell}
        {week_row_end}</tr>{/week_row_end}

        {cal_row_start}<tr>{/cal_row_start}
        {cal_cell_start}<td>{/cal_cell_start}
        {cal_cell_start_today}<td>{/cal_cell_start_today}
        {cal_cell_start_other}<td class="other-month">{/cal_cell_start_other}

        {cal_cell_content}<a href="{content}">{day}</a>{/cal_cell_content}
        {cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

        {cal_cell_no_content}{day}{/cal_cell_no_content}
        {cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

        {cal_cell_blank}&nbsp;{/cal_cell_blank}

        {cal_cell_other}{day}{/cal_cel_other}

        {cal_cell_end}</td>{/cal_cell_end}
        {cal_cell_end_today}</td>{/cal_cell_end_today}
        {cal_cell_end_other}</td>{/cal_cell_end_other}
        {cal_row_end}</tr>{/cal_row_end}

        {table_close}</table>{/table_close}
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
			 $data['calendar'] = $this->calendar->generate($this->uri->segment(3), $this->uri->segment(4),$datas);
			$this->load->view('templates/login-material-header',$data);
			$this->load->view('pages/material-calendar',$data);
			$this->load->view('templates/material-footer');
		}else{
				   redirect('Login');
		}
	}
	//https://maps-generator.com
	
	function profile($page = 'profile')
	{
		if($this->session->userdata('logged_in')){
			
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
			
			$data['title'] = ucfirst("profile"); // Capitalize the first letter
			
			$this->load->model('Login_model');
			$data['user'] = $this->Login_model->getById()->row();  
			$this->load->view('templates/login-material-header',$data);
			$this->load->view('pages/material-profile');
			$this->load->view('templates/material-footer');
		}else{
				   redirect('Login');
		}
	}
	function cashier($page = 'cashier')
	{
		if($this->session->userdata('logged_in')){
			$this->load->model('Login_model'); 
			$data['user'] = $this->Login_model->getById()->row();  
			$data ['email']= $this->session->userdata('email'); 
			$data['title'] = ucfirst($page); // Capitalize the first letter
			$this->load->view('templates/login-material-header',$data);
			$this->load->view('pages/material-casheir');
			$this->load->view('templates/material-footer');
		}else{
				   redirect('Login');
		}
	}
	function settings($page = 'settings')
	{   
		if($this->session->userdata('logged_in')){
			
			$this->load->model('Login_model');
			$data['user'] = $this->Login_model->getById()->row();  
			$data ['email']= $this->session->userdata('email'); 
			$data['title'] = ucfirst($page); // Capitalize the first letter
			$this->load->view('templates/login-material-header',$data);
			$this->load->view('pages/material-settings');
			$this->load->view('templates/material-footer');
		}else{
				   redirect('Login');
		}
	}
  
}	