<?php
    class Photo extends CI_Controller
    {
        
           public function __construct()
        {
            parent::__construct();
            $this->is_logged_in(); 
            $this->load->helper(array('form', 'url'));
            $this->load->library('pagination');
            $this->load->model('photomodel');
        } 
            
            function is_logged_in()
        {
            $is_logged_in = $this->session->userdata('is_logged_in');
           
            if(!isset($is_logged_in)|| $is_logged_in != TRUE)
            {
             redirect('login');
               die();
            }
        }
        
        function photos(){
          $data = array();
        
        if ($query = $this->photomodel->record_count())
         {
            $results =array(); 
            $config = array();
            $config['base_url'] = base_url() . "photo/photos";
            $config['total_rows'] = $this->photomodel->record_count();
            $config['per_page'] = 8;
            $config['uri_segment'] = 3;
            
            $config['last_link'] = 'Last';
            $config['first_link'] = 'First';
            
            $this->pagination->initialize($config);
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            
            $data['results'] = $this->photomodel->fetch_entry($config['per_page'], $page);       
            $data['links'] = $this->pagination->create_links();
            $data ['username']= $this->session->userdata('username');
            $data ['categories']= $this->site_model->get_category();
            $data['errors']= ''; 
        }
         else {
            $query1 = $this->site_model->get_category();
            $data ['username']= $this->session->userdata('username'); 
            $data ['categories']= $query1;  
            $data['errors']= ''; 
            $data['links']= '';
         }
        
        
        $data['title'] ='ADCE Builders - Architecture Photos';
        $data['subnav']='members_area/subnav_login';
        $data['main_content']= 'members_area/photos/photo_list';
        $this->load->view('members_area/template_login',$data); 
        
    }
        
        
        function upload_photos(){
        
            
            $query1 = $this->site_model->get_category();
            $data ['username']= $this->session->userdata('username'); 
            $data ['categories']= $query1;  
            $data['errors']= ''; 
            $data['links']= '';
            
        
        $data['title'] ='ADCE Builders - Architecture Photos';
        $data['subnav']='members_area/subnav_login';
        $data['main_content']= 'members_area/photos/upload_photo_form';
        $this->load->view('members_area/template_login',$data); 
        
    }
      function photo_do_upload(){
          
        $this->load->model('photomodel');
          
        if($this->photomodel->do_upload()){
            $query1 = $this->site_model->get_category();
            $data ['username']= $this->session->userdata('username'); 
            $data ['categories']= $query1;  
           
        }
        else{
            
            $query1 = $this->site_model->get_category();
            $data ['username']= $this->session->userdata('username'); 
            $data ['categories']= $query1;  
            $data ['errors'] ='Upload Succesful';
            }
        $data['title'] ='ADCE Builders - Architecture Photos';
        $data['subnav']='members_area/subnav_login';
        $data['main_content']= 'members_area/photos/upload_photo_form';
        $this->load->view('members_area/template_login',$data); 
            
      }  
      function add_photo_category(){
        
            $query1 = $this->site_model->edit_categories();
            $data ['username']= $this->session->userdata('username'); 
            $data ['categories']= $query1;  
            $data['errors']= ''; 
            $data['links']= '';
        
        $data['title'] ='ADCE Builders - Architecture Photos';
        $data['subnav']='members_area/subnav_login';
        $data['main_content']= 'members_area/photos/add_photo_category';
        $this->load->view('members_area/template_login',$data); 
        
    }
    function show_categories(){
        
        if($query1 = $this->site_model->get_category()){
            $data ['username']= $this->session->userdata('username'); 
            $data ['categories']= $query1;  
        }
        else{
           $data ['username']= $this->session->userdata('username'); 
           $data ['records']= 'no records found';   
        }
        
        $data['title'] ='ADCE Builders - Architecture Photos';
        $data['subnav']='members_area/subnav_login';
        $data['main_content']= 'members_area/entries/show_categories';
        $this->load->view('members_area/template_login',$data); 
    }
    function delete_photo(){
     
    if( $this->photomodel->do_delete_photo()){
        
        redirect('photo/photos'); 
    }
    
    redirect('photo/photos'); 
  } 
 function edit_photo()
    {
       $this->load->model('photomodel');
       $query1 = $this->site_model->get_category();
       $data ['username']= $this->session->userdata('username'); 
       $data ['categories']= $query1;  
       $data['photos'] = $this->photomodel->getById()->row(); 
       $data['errors']= ''; 
       $data['links']= '';
            
        
        $data['title'] ='ADCE Builders - Architecture Photos';
        $data['subnav']='members_area/subnav_login';
        $data['main_content']= 'members_area/photos/edit_photo_form';
        $this->load->view('members_area/template_login',$data); 
    
    }
   function update(){
        $this->photomodel->update();
        // Load views   
       
         redirect('photo/photos'); 
 
   }      
 }
