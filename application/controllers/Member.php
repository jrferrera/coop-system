<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends Core_Controller {
	public function __construct() {
		parent::__construct();

		$this->class = 'member';

		$this->load->model('member');
	}

	public function index() {
		$this->title = 'Member';
		$this->template = 'member/index';

		$this->render_page();
	}
}

?>