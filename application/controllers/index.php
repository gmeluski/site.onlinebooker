<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('slots', 'slotsSql');
	}

	function index()
	{
    	$this->load->model('datetest');
		$this->load->view('main');
	}

  	function daily() {
		$this->load->view('weekly_calendar_demo');
	}
	
	function addnow() {
		$data->slotsResult = $this->slotsSql->add_now();
		echo 'done';
		
	}
	
	function datepicker() {
		if (isset($_POST['datepicker'])) {
			#this strtotime is going to convert to GM time
			$datepicker_unix_timestamp = strtotime($_POST['datepicker']);
			$this->slotsSql->add_basic_time($datepicker_unix_timestamp);
			exit;
			
		}
		
		$this->load->view('datepicker');
		
	}
	
	
	function slots() {
		$this->load->model('users', 'usersSql');
		$userInfo = $this->usersSql->get_user_by_id();
		$data->timezone = $userInfo[0]->timezone;
		$data->slotsResult = $this->slotsSql->get_last_ten_entries();
		$this->load->view('slots', $data);
	}
	
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */