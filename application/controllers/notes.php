<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notes extends CI_Controller {


	public function index()
	{
		$results = $this->note->retrieve_post();
		$this->load->view('notes_view', array('results'=>$results));

	}

	public function create() 
	{
		$result = $this->note->send_post($this->input->post());
		echo json_encode("success");	
	}
}
