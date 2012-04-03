<?php
class Slots	 extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }


    function get_last_ten_entries()
    {
		$this->db->order_by("begin", "DESC");
        $query = $this->db->get('slots', 10);
        return $query->result();
    }


	function find_monthly_entries($month=12, $year = 2011) {
		$first = mktime(0,0,0,$month,1,$year);
		echo date('r', $first);

		$last = mktime(23,59,00,$month+1,0,$year);
		echo date('r', $last);
		
		
	}
	
	
	public function get_slots_by_client($client_id) {
		
		$query = $this->db->query("SELECT * FROM slots
		LEFT JOIN slots_to_clients ON slots.id = slots_to_clients.slot_id
		WHERE slots_to_clients.client_id = $client_id");
		
		return $query->result();
	}
	
	
	function add_basic_time($unix_timestamp) {
		$this->begin = $unix_timestamp;
		$this->end = $this->begin + (60 * 60);
		$this->timezone = "America/New_York";
		$this->db->insert('slots', $this);
		
	}
	
	
	function add_now() {
		$this->begin = time();
		$this->end = $this->begin + (60 * 60);
		$this->timezone = "America/New_York";
		$this->db->insert('slots', $this);
		
	}
	

    function insert_entry()
    {
        $this->title   = $_POST['title']; // please read the below note
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('entries', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }
}
