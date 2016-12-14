<?php

class Photomodel extends CI_Model{
    
   function __construct(){
    parent::__construct();
    //return the full path of the directory
    //make sure these directories have read and write permessions
    $this->original_path = realpath(APPPATH.'../uploads/photos/original');
    $this->_313x179_path = realpath(APPPATH.'../uploads/photos/_313x179');
    $this->_500x316_path = realpath(APPPATH.'../uploads/photos/_500x316');
  }
    
    function add_photo_record()//same as insert post
    {
       $this->db->where('category_name',$this->input->post('projecttype')) ;
       $category = $this->db->get('entry_category')->row(); 
       $this->db->where('username',$this->input->post('author')) ;
       $author = $this->db->get('membership')->row(); 
          
       $data1 = array(
            'name' => $this->input->post('name'),
            'address' =>$this->input->post('address'),
            'pic_location' => $image_data['full_path'],
            'category_id' => $category->category_id,
            'user_id' => $author->user_id,
            'featured_status'=> $this->input->post('featured_status')
                );          
        $this->db->insert('entry',$data1);
        
    }
    
    function do_upload()
    {
    
                        
    $this->load->library('image_lib');
    $config = array(
    'allowed_types'     => 'jpg|jpeg|gif|png', //only accept these file types
    'max_size'          => 4048, //2MB max
    'upload_path'       => $this->original_path //upload directory
    
      );
 
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload()){
        
            $data = array('errors' => $this->upload->display_errors());
           
      return TRUE;
       
    }
    else{
            $image_data = $this->upload->data(); //upload the image
            
            $this->db->where('category_name',$this->input->post('projecttype'));
            $category = $this->db->get('entry_category')->row(); 
            $this->db->where('username',$this->input->post('author')) ;
            $author = $this->db->get('membership')->row(); 
          
            $data1 = array(
            'title' => $this->input->post('title'),
            'location' =>$this->input->post('address'),
            'images' => $image_data['file_name'],
            'category_id' => $category->category_id,
            'featurework'=> $this->input->post('featured')
        );          
            $this->db->insert('gallery_photos',$data1);
          
           
 
            $config['source_image'] = $image_data['full_path'];
            $config['new_image'] = $this->_500x316_path;
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 500;
            
            $config['remove_spaces'] = true;
 
    
    $this->image_lib->initialize($config);
    $this->image_lib->resize();
 
            $config['source_image'] = $image_data['full_path'];
            $config['new_image'] = $this->_313x179_path;
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 313;
            
            $config['remove_spaces'] = true;
 
    //here is the second thumbnail, notice the call for the initialize() function again
    $this->image_lib->initialize($config);
    $this->image_lib->resize();
   
    }
    
  }
    function record_count() {      
        $this->db->where('update_delete','0');
        $query = $this->db->get('gallery_photos');
         return $query->num_rows();
    }

     function fetch_entry($limit, $start) {
        $this->db->limit($limit, $start); 
        $this->db->select('*');
        $this->db->from('gallery_photos');  
        $this->db->join('entry_category','gallery_photos.category_id = entry_category.category_id');
        $this->db->where('update_delete','0');
        $query = $this->db->get();
        
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
     function do_delete_photo(){
            
       if( $row = $this->db->where('id',$this->uri->segment(3))->get('gallery_photos')->row()){
         
         unlink($this->_313x179_path .'/'. $row->images);
         unlink($this->_500x316_path .'/'. $row->images);
         
        $data = array(     
            'update_delete' => '1');
            
        $this->db->where('id',$this->uri->segment(3));
        $this->db->update('gallery_photos',$data);
        return TRUE;
     }else{
       return false;
     }
    }
    function getById() 
    {
                   
        $this->db->where('id',$this->uri->segment(3));
        return $this->db->get('gallery_photos');
    }   
    function update() 
    {
       $this->db->where('category_name',$this->input->post('projecttype')) ;
       $category = $this->db->get('entry_category')->row(); 
       
        
        $data1 = array(
            'title' => $this->input->post('title'),
            'location' =>$this->input->post('address'),
            'category_id' => $category->category_id,  
            'featurework'=>$this->input->post('featured'),
                ); 
        $this->db->where('id',$this->input->post('id'));        
        $this->db->update('gallery_photos',$data1);
        return ;    
    }
      
}
    