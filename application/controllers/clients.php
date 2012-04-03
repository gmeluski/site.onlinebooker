<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clients extends CI_Controller {
	


	function __construct()
	{
		parent::__construct();
	}
	
	
	function index($clientId = 1) {
		$this->load->model('client', 'clientSql');
		
		$clientInfo = $this->clientSql->get_client_by_id($clientId);
		$data->timezone = $clientInfo[0]->timezone;
		$this->load->model('slots', 'slotsSql');		
		$data->slotsResult = $this->slotsSql->get_slots_by_client($clientId);
		$this->load->view('slots', $data); 
	}
	
	
}