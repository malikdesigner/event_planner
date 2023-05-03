<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
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
		$row = $this->Event_model->get_event_data();
		$events = array();
		if (empty($_SESSION['user_data'])) {
			foreach ($row as $r) {
				if ($r->customerID == 0) {
					array_push($events, $r);
				}
			}
		} else {

			if ($_SESSION['user_data']['user_type'] == 'customer') {
				foreach ($row as $r) {
					if ($r->customerID == $_SESSION['user_data']['id']) {
						array_push($events, $r);
					}
				}
			} else {
				$events = $row;
			}
		}
		$users = $this->Event_model->get_all_users();

		$data['users'] = $users;
		$data['events'] = $events;
		$this->load->view('header');

		$this->load->view('event_list', $data);
		$this->load->view('footer');
	}
	public function edit_event($id)
	{
		if (!empty($_SESSION['user_data']) && $_SESSION['user_data']['user_type'] == 'admin') {
			$event = $this->Event_model->get_specific_event($id);
			$row = $this->Event_model->get_customers();
			$data['customer'] = $row;
			$data['events'] = $event;

			$this->load->view('header');

			$this->load->view('edit_event_view', $data);
			$this->load->view('footer');
		} else {
			header('Location: ' . $this->config->base_url('login/index'));
			exit;
		}
	}
	public function view_event($id)
	{
		if (!empty($_SESSION['user_data']) && $_SESSION['user_data']['user_type'] == 'admin') {

			$event = $this->Event_model->get_specific_event($id);
			$row = $this->Event_model->get_customers();
			$data['customer'] = $row;
			$data['events'] = $event;
			$this->load->view('header');
			$this->load->view('event_view',$data);
			$this->load->view('footer');
		} else {
			header('Location: ' . $this->config->base_url('login/index'));
			exit;
		}
	}
	public function delete_event($id)
	{
		if (!empty($_SESSION['user_data']) && $_SESSION['user_data']['user_type'] == 'admin') {

			$event = $this->Event_model->delete_event($id);

			if($event){
				header('Location: ' . $this->config->base_url('event/index'));
				exit;
			}
			
		} else {
			header('Location: ' . $this->config->base_url('login/index'));
			exit;
		}
	}

	public function add_event()
	{
		if (!empty($_SESSION['user_data']) && $_SESSION['user_data']['user_type'] == 'admin') {

			$row = $this->Event_model->get_customers();
			$data['customer'] = $row;
			$this->load->view('header');
			$this->load->view('add_event_view', $data);
			$this->load->view('footer');
		} else {
			header('Location: ' . $this->config->base_url('login/index'));
			exit;
		}
	}
	public function add_new_event()
	{
		if (!empty($_SESSION['user_data']) && $_SESSION['user_data']['user_type'] == 'admin') {

			if ($this->input->post()) {
				$inputs = $this->input->post();
				$row = $this->Event_model->create_event($inputs);
				if ($row) {
					echo json_encode(['msg' => 'success']);
				} else {
					echo json_encode(['msg' => 'error']);
				}
			} else {
				echo json_encode(['msg' => 'error']);
			}
		} else {
			header('Location: ' . $this->config->base_url('login/index'));
			exit;
		}
	}
	public function update_event()
	{
		if (!empty($_SESSION['user_data']) && $_SESSION['user_data']['user_type'] == 'admin') {

			if ($this->input->post()) {
				$inputs = $this->input->post();
				$row = $this->Event_model->update_event($inputs);
				if ($row) {
					echo json_encode(['msg' => 'success']);
				} else {
					echo json_encode(['msg' => 'error']);
				}
			} else {
				echo json_encode(['msg' => 'error']);
			}
		} else {
			header('Location: ' . $this->config->base_url('login/index'));
			exit;
		}
	}
	function book_event(){
		header('Location: ' . $this->config->base_url('event/index'));

	}
	function discount_event(){
		header('Location: ' . $this->config->base_url('event/index'));

	}
}
