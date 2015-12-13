<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sessions extends Core_Controller {
	public function __construct() {
		parent::__construct();

		$this->class = 'sessions';

		$this->load->model('user_model', 'user');
		$this->load->model('profile_model', 'profile');
		$this->load->model('role_model', 'role');
	}

	public function index() {
		$this->title = 'Login';
		$this->template = 'sessions/login';

		$this->render_page();
	}

	public function create() {
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->user->get_by_credentials($email, $password);

		if(!is_null($user)) {
			$session_data = array(
				'login' => TRUE,
				'user'	=> array(
								'credentials' => $user,
								'profile' => $this->profile->get_by_user($user->id),
								'role' => $this->role->get_by_user($user->id)
							)
			);

			$this->session->set_userdata($session_data);

			$this->session->set_flashdata('success', 'Successfully logged in.');

			redirect('home');
		}else {
			$this->session->set_flashdata('error', 'Invalid email or password.');

			redirect('sessions');
		}
	}

	public function logout() {
		$this->session->sess_destroy();

		redirect('/');
	}
}

?>