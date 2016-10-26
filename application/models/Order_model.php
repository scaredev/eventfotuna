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
		'eventdate'=>$this->input->post('date-time'),
		'participants'=>$this->input->post('participants'),
		'address'=> $this->input->post('address'),
		'completed'=>"0",
		'winner_id'=>"",	
		'transaction_id'=>$trans_id
		);
		
		$this->db->insert('orders',$order);
		
	}
	public function record_count() {
		
	return $this->db->count_all('orders');
	}

	// Fetch data according to per_page limit.
	public function fetch_data($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("orders");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
   function getById() 
    {     
        $this->db->where('email',$this->session->userdata('email'));
        return $this->db->get('user');
	
	}
  
}