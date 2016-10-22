<?php 

class Event extends CI_Controller{
 
	public function __construct()
    {
        parent::__construct();		
		$this->load->helper(array('form','url'));		
          $this->load->library('session');
          $this->load->helper('html');
          $this->load->library('form_validation');
          //load the login model
          $this->load->model('Login_model');
		  
    }
	function dashboard($page = 'dashboard')
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
	function history($page = 'history')
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
	function overview($page = 'overview')
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
	function calendarview ($page = 'calendar')
	{
		if($this->session->userdata('logged_in')){
			$data ['email']= $this->session->userdata('email'); 
			$data['title'] = ucfirst($page); // Capitalize the first letter
			
		$prefs['template'] = '

        {table_open}<table border="0" cellpadding="0" cellspacing="0">{/table_open}

        {heading_row_start}<tr>{/heading_row_start}

        {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
        {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
        {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

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
		$prefs = array(
        'show_next_prev'  => TRUE,
        'next_prev_url'   => base_url('Event/calendarview')
		);
			$this->load->library('calendar', $prefs);
			$this->load->view('templates/admin-header',$data);
			$this->load->view('pages/'.$page, $prefs);
			$this->load->view('templates/admin-footer');
		}else{
				   redirect('Login');
		}
	}
	function profile($page = 'profile')
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