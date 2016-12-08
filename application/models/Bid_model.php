<?php
class Bid_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
		 
  
  }
	function add_bid(){
		
		$this->db->select('user_id');
		$this->db->where('user_email', $this->session->userdata('email'));
		$this->db->limit(1);
		$bidder = $this->db->get('user')->row();
		
		//if id is unique we want just one row to be returned
		
		
		$bid = array(
		'bid_order_id'=>$this->input->post('order-id'),
		'transaction_id'=>$this->input->post('trans-id'),
		'bid_barista_id'=>$bidder->user_id,
		'bid_prize'=>$this->input->post('prize'),
		'bid_completed' => "0"
		);
		
		
		$this->db->insert('bidding',$bid);
	    return;
	}
	
	
}