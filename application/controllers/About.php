<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		// Initialization tasks go here
		$this->load->library('session');

		$this->load->model('Event_model');
	}
	
	public function index()
	{

		
        
        $this->load->view('header');

		$this->load->view('about_view');
		$this->load->view('footer');
	}
    
}