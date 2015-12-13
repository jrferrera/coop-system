<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Core_Controller {
	public function __construct() {
		parent::__construct();

		$this->class = 'user';

		$this->load->model('user_model', 'user');
		$this->load->model('role_model', 'role');
	}

	public function index() {
		$this->title = 'User';
		$this->template = 'user/index';

		$this->data['role_options'] = $this->role->options();

		$this->render_page();
	}

	public function get() {
		$id = $this->input->post('id');
		$response['user'] = $this->user->get_by_id($id);

		echo json_encode($response);
	}

	public function add() {
		if($this->user->create($this->input->post())) {
			$response['message'] = 'success';
			$response['messageType'] = 'Successfully added a user.';
		}else {
			$response['message'] = 'error';
			$response['messageType'] = 'Failed to add user.';
		}

		echo json_encode($response);
	}

	public function search() {
		$users = $this->user->search();

		$response = $this->load->view('user/includes/_table', array('users' => $users), TRUE);
		echo json_encode($response);
	}
}

?>