<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
    $this->load->model('tester_model');
    $data['lastTenViews'] = $this->tester_model->get_last_ten_entries();
    //var_dump($data);
		$this->load->view('main', $data);
	}

  function daily()
	{
		$this->load->view('weekly_calendar_demo_daily');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */