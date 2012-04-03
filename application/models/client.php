<?php 


class Client extends CI_Model {
	
    function __construct()
    {
        parent::__construct();
    }

	function get_client_by_id($client_id = 1)
    {
        $query = $this->db->get('clients', array('id' => $client_id));
        return $query->result();
    }	
	
}