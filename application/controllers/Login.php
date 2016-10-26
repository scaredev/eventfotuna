<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class login extends CI_Controller
{

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
          $this->load->model('Login_model');
     }
	 
    
	function index($page ='home')
     {
          //get the posted values
          $email = $this->input->post("email");
          $pass = $this->input->post("password");

          //set validations
          $this->form_validation->set_rules("email", "Email", "required");
          $this->form_validation->set_rules("password", "Password", "trim|required");

          if ($this->form_validation->run() == FALSE)
          {
               //validation fails
			
            $data['errors']='';
			$data['title'] = ucfirst($page); // Capitalize the first letter
			$this->load->view('templates/header',$data);
			$this->load->view('pages/'.$page);
			$this->load->view('templates/footer');
          }
          else
          {
               //validation succeeds
             if( $email && $pass && $this->Login_model->validate_user($email,$pass)){
				 
				 redirect('Event/overview');
			 }
			 else
                    {
                         $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
                         redirect('login/index');
                    }
               
               
          }
     }
	
    function validate_credentials($email, $password){
					$email_post = $this->input->post("email");
					$password = $this->input->post("password");
					$this->load->model('Login_model'); 
                    $usr_result = $this->Login_model->validate($email, $password);
                    if ($usr_result > 0) //active user record is present
                    {
                         //set the session variables
                         $sessiondata = array(
                              'email' => $email_post,         
							  'logged_in' => TRUE
                         );
                         
                         redirect('Event/overview',$this->session->all_userdata());
                    }
                    else
                    {
                         $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
                         redirect('login/index');
                    }
    }
	
    function logout()
		{
			$user_data = $this->session->all_userdata();
				foreach ($user_data as $key => $value) {
					if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
						$this->session->unset_userdata($key);
					}
				}
			$this->session->sess_destroy();
			redirect('login');
		}
}