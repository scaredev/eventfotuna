<?php

class Admin_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
		  
     }

	public function user_count() {
		  
		   $this->db->select('*');
		   $this->db->from('user');
	return $this->db->count_all_results();
	}

	// Fetch data according to per_page limit.
	public function fetch_user($limit, $start) {
	    
		$this->db->limit($limit, $start);
		$this->db->select('*');
		$this->db->from('user');		
	    $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
   public function orders_count() {
		  
		   $this->db->select('*');
		   $this->db->from('orders');
	return $this->db->count_all_results();
	}

	// Fetch data according to per_page limit.
	public function fetch_orders($limit, $start) {
	    
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
   public function count_all_bids() {
		  
		   $this->db->select('*');
		   $this->db->from('bidding');
	return $this->db->count_all_results();
	}

	// Fetch data according to per_page limit.
	public function fetch_all_bidding($limit, $start) {
	    
		$this->db->limit($limit, $start);
		$this->db->select('*');
		$this->db->from('bidding');
	    $this->db->join('orders','bidding.order_id = orders.orders_id');
		$this->db->join('user','user.user_id = bidding.barista_id');
	    $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
   
}   