<?php

class Order_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
		 
     
	}
	
	function add_order(){
		
		$trans_id =strtoupper(uniqid());
		$order = array(
		'party'=>$this->input->post('eventtype'),
		'partytype'=>$this->input->post('event'),
		'zipcode'=>$this->input->post('zip'),
		'name'=>$this->input->post('inputname'),
		'email'=>$this->input->post('inputemail'),
		'tel'=>$this->input->post('tel'),
		'eventdate'=>$this->input->post('inputname'),
		'participants'=>$this->input->post('participants'),
		'address'=> $this->input->post('address'),
		'completed'=>"0",
		'winner_id'=>"",	
		'transaction_id'=>$trans_id
		);
		
		$this->db->insert('orders',$order);
		
	}
	 function get_all($limit, $start) 
	{
        
		$this->db->limit($limit, $start);
		 $this->db->select('*');
         $this->db->from('orders'); 
        $query = $this->db->get();

         if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;

    } 
	function get_record() 
	{
      	    
      	$query = $this->db->get('orders');
		        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	function record_count() {
        
        $query = $this->db->get('orders');
        return $query->num_rows();
    }
	
}	