<?php

class Admin_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
		  
     }
	
	 function fetch_latest_user() {
	    
		$this->db->limit(5);
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
		
	 function fetch_latest_orders() {
	    
		$this->db->limit(5);
		$this->db->select('*');
		$this->db->from('orders');	
		$this->db->where('completed',0)	;
		$this->db->order_by('orderdate','desc');
	    $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
    function fetch_closed_orders() {
	    
		$this->db->limit(5);
		$this->db->select('*');
		$this->db->from('orders');	
		$this->db->where('completed !=', 0)	;
		$this->db->order_by('orderdate','desc');
	    $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }

	function user_count() {
		  
		   $this->db->select('*');
		   $this->db->from('user');
	return $this->db->count_all_results();
	}

	// Fetch data according to per_page limit.
	 function fetch_user($limit, $start) {
	    
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
    function orders_count() {
		  
		   $this->db->select('*');
		   $this->db->from('orders');
	return $this->db->count_all_results();
	}

	// Fetch data according to per_page limit.
	 function fetch_orders($limit, $start) {
	    
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
    function count_all_bids() {
		  
		   $this->db->select('*');
		   $this->db->from('bidding');
	return $this->db->count_all_results();
	}

	// Fetch data according to per_page limit.
	 function fetch_all_biddings($limit, $start) {
	    
		$this->db->limit($limit, $start);
		$this->db->select('*');
		$this->db->from('bidding');
	    $this->db->join('orders','bidding.bid_order_id = orders.orders_id');
		$this->db->join('user','user.user_id = bidding.bid_barista_id');
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