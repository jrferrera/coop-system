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
		$response = $this->user->get_by_id($id);

		echo json_encode($response);
	}

	public function add() {
		if($this->user->create($this->input->post())) {
			$response['messageType'] = 'success';
			$response['message'] = 'Successfully added a user.';
		}else {
			$response['messageType'] = 'error';
			$response['message'] = 'Failed to add user.';
		}

		echo json_encode($response);
	}

	public function edit() {
		if($this->user->update($this->input->post())) {
			$response['messageType'] = 'success';
			$response['message'] = 'Successfully edited a user.';
		}else {
			$response['messageType'] = 'error';
			$response['message'] = 'Failed to edit user.';
		}

		echo json_encode($response);
	}

	public function delete() {
		$id = $this->input->post('id');

		if($this->user->delete($id)) {
			$response['message'] = 'Successfully delete user.';
		}else {
			$response['message'] = 'Failed to delete user.';
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