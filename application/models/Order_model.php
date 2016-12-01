<?php
class Order_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
		 
  
  }
	function set_order_sess(){
		
		
		$this->session->set_userdata( array(
            'fname'=>$this->input->post("fname"),
            'party'=>$this->input->post("party"),
			'zipcode'=>$this->input->post("zipcode"),
            'partytype'=>$this->input->post("partytype"),
            //email-validated
			)
		);
	    return true;
		
	}
  
	function add_order($order){
			
		if ($this->db->insert('orders',$order)){
			
		return true;
		}	
		else{
			
			return false;
		}
	}
	
	 function trackBidders(){ 
	 
	    $this->db->select('*');	 
		$this->db->from('bidding');
		$this->db->where('bid_completed',0);
		$this->db->where('order_id',$this->uri->segment(2));
		$this->db->join('user','user.user_id = bidding.barista_id');
		$this->db->limit(3);
		$this->db->order_by('prize','asc');
		$query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
	 }
	 
	function track_orderby_id(){
		
		$this->db->where('orders_id',$this->uri->segment(2));
		return $this->db->get('orders');
	}
	
	public function record_count() {
		   $val = 0;
		   $this->db->select('*');
		   $this->db->from('orders');
		   $this->db->where('completed',$val);
	return $this->db->count_all_results();
	}

	// Fetch data according to per_page limit.
	public function fetch_data($limit, $start) {
	    $val = 0;
		$this->db->limit($limit, $start);
		$this->db->select('*');
		$this->db->from('orders');		
		$this->db->where('completed',$val);
		$this->db->order_by('orderdate', 'desc');
	    $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
   
   public function bid_count() {
		$this->db->where('barista_id',$this->session->userdata('id'));
		$this->db->from('bidding');
	return $this->db->count_all_results();
	}

	// Fetch data according to per_page limit.
	
	public function fetch_bid_data($limit, $start) {
        $this->db->limit($limit, $start);
		
		$this->db->select('*');
		$this->db->from('bidding');
		$this->db->join('orders', 'orders.orders_id = bidding.order_id');
		$this->db->where('barista_id',$this->session->userdata('id'));
		$query = $this->db->get();
				

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
   
   function getOrderById() 
    {     
        $this->db->where('email',$this->session->userdata('email'));
        return $this->db->get('user');
	
	}
  
}