<?php
class Mailer extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        /*$this->load->model('sendmail_model');*/
        $this->load->library(array('email', 'form_validation'));
        $this->load->helper(array('email', 'form'));
        $this->load->library('form_validation');
        $this->load->helper('email');
    }

    
    function sendMail() 
{
               
        $data = array( 'name' =>$this->input->post('cname'), 
        'address1' =>$this->input->post('caddress'),
        'address2' =>$this->input->post('caddress2'),
        'clientemail' =>$this->input->post('cemail'),
        'cnumber' =>$this->input->post('cnumber'),
        'subject' =>$this->input->post('subject'),
        'projecttype' =>$this->input->post('projecttype'),
        'projectloc' =>$this->input->post('projectloc'),
        'projectbud' =>$this->input->post('projectbud'),
        'lotarea' =>$this->input->post('lotarea'),
        'floorarea' =>$this->input->post('floorarea'),
        'planneddate' =>$this->input->post('planneddate'),
        'additionalinfo' =>$this->input->post('additionalinfo')
        
        );   
        
            
        $name = $this->input->post('cname');
        $subject = "Qoutation Request for ". $this->input->post('subject');
        $emailfrom = $this->input->post('cemail');
        $message=$this->load->view('emailtemplate/qoutation_mail',$data,TRUE);
        $emailto = "inquiry@adcebuilders.com.ph";
        $list = array('inquiry@adcebuilders.com.ph', 'architect@adcebuilders.com.ph', 'cacuyado@gmail.com');
         $this->email->set_newline("\r\n");
         /*$this->email->cc('cacuyado@gmail.com');*/      
         $this->email->from($emailfrom,$name);
         $this->email->to($list);
         $this->email->subject($subject);
         $this->email->message($message);
            
            if($this->email->send())
     {
      echo "<script>
            alert('Your Request was sent.');
            window.location.href='" . base_url() ."'
            </script>";
            
      exit();
     }
     else
    {
     show_error($this->email->print_debugger());
    }

}
    
function get_intouch()
{
    
		$name = $this->input->post('name');
        $nunber = $this->input->post('number');
        $subject = "Costumer Message ";
        $emailfrom = $this->input->post('email');
        $message=$this->input->post('comments');
        $emailto = "inquiry@adcebuilders.com.ph";
        $list = array('inquiry@adcebuilders.com.ph', 'architect@adcebuilders.com.ph', 'cacuyado@gmail.com');
         $this->email->set_newline("\r\n");
         /*$this->email->cc('cacuyado@gmail.com');*/      
         $this->email->from($emailfrom,$name,$number);
         $this->email->to($list);
         $this->email->subject($subject);
         $this->email->message($message);
            
            if($this->email->send())
             {
                echo "<script>
            alert('Your Message was sent.');
            window.location.href='". base_url()."'
            </script>";
             exit();
              }
     else
    {
     show_error($this->email->print_debugger());
    }

    }
 function send_news()
{
    $this->load->model('mailer_model');    
    $subscribers = $this->mailer_model->get_subscriber_data();
    
    foreach($subscribers as $subscriber)
    {
        $this->load->helper('typography');
       //Format email content using an HTML file
        $subject = $this->input->post('subject');
     

        $config['mailtype'] = 'html';
        $name = 'Newsman ADCE Builders';
        
        $emailfrom = 'inquiry@adcebuilders.com.ph';
        $message=$this->input->post('message');
        $emailto = $subscriber->address;
        $this->email->set_newline("\r\n");   
         $this->email->from($emailfrom,$name);
         $this->email->to($emailto);
         $this->email->subject($subject);
         $this->email->message($message);
            
         if($this->email->send())
             {
                  
            
              }
         else
        {
         show_error($this->email->print_debugger());
        }
    }
    echo "<script>
            alert('Your Message was sent.');
            window.location.href='" . base_url() ."site/members_login'
            </script>";
             exit();
    }



}
