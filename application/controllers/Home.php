


<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
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

        $this->load->view('landing_page');
        $this->load->view('footer');
    }
}
?>