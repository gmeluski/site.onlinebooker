<?php
class Users	 extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

	function get_user_by_id($user_id = 1)
    {
        $query = $this->db->get('users', array('id' => $user_id));
        return $query->result();
    }

}