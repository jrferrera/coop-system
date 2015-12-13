<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Core_Controller {
	public function __construct() {
		parent::__construct();

		$this->class = 'home';

		$this->check_session();
	}

	public function index() {
		$this->title = 'Home';
		$this->template = 'home';

		$this->render_page();
	}
}

?>