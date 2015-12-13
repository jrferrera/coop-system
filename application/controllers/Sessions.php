<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sessions extends Core_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('user');
	}

	public function index() {
		$this->title = 'Login';
		$this->template = 'sessions/login';
		$this->render_page();
	}

	public function create() {
		$this->session->set_flashdata('error', 'Successfully logged in.');

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		// $user = $this->user->get_by_credentials($email, $password);

		var_dump($user);
	}
}

?>