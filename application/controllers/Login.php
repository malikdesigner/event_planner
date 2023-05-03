<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		// Initialization tasks go here
		$this->load->library('session');

		$this->load->model('Login_model');
	}
	
	public function index()
	{

		if(!isset($_SESSION['user_data'])){

			
		$this->load->view('header');

		$this->load->view('login');
		$this->load->view('footer');
		}
		else {
			header('Location: ' . $this->config->base_url('event/index'));
		}
	}
	public function sign_up()
	{
		$this->load->view('header');

		$this->load->view('signup_view');
		$this->load->view('footer');
	}
	public function register_user()
	{
		if ($this->input->post()) {
			$inputs = $this->input->post();
			$row = $this->Login_model->save_user($inputs);
			if ($row) {
				echo json_encode(['msg' => 'success']);
			} else {
				echo json_encode(['msg' => 'error']);
			}
		} else {
			echo json_encode(['msg' => 'error']);
		}
	}
	public function authentication()
	{
		if ($this->input->post()) {

			$inputs = $this->input->post();
			$row = $this->Login_model->authenticate($inputs);
			if ($row == false) {
				echo json_encode(['msg' => 'error']);
			} else {
				foreach ($row as $r) {
					$data = array(
						'firstname' => $r->first_name,
						'id' => $r->id,
						'user_type' => $r->user_type,
						'country' => $r->country,
						'email' => $r->email


					);
				}
				$_SESSION['user_data'] = $data;
				//$this->session->set_userdata($data);		
				echo json_encode(['msg' => 'success']);
			}
		}
	}
	public function sign_out()
	{
		unset($_SESSION['user_data']);
		header('Location: ' . $this->config->base_url('login/index'));
		exit;
	}
}
