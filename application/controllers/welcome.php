<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		echo gmmktime(8, 0, 0, 1, 13, 2012);
		echo "<br />";
		echo gmmktime(9, 0, 0, 1, 13, 2012);
		echo "<br />";		
		$timestamp = time();
		echo $timestamp;
		echo "<br />";
		echo "     UTC: " . gmdate('r', $timestamp) . "\n";
		$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */