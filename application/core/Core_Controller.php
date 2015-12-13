<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Core_Controller extends CI_Controller {
	protected $app_name		= 'Coop System ';
	protected $title		= '';
	protected $class		= '';
	protected $template		= NULL;
	protected $body_data	= array();
	protected $data	= array();

	public function __construct() {
		parent::__construct();
	}

	public function check_session() {
		if(!$this->session->login) {
			redirect('sessions');
		}
	}

	public function render_page() {
		$header = $this->load->view('/includes/_header', array('class' => $this->class), TRUE);
		$body = $this->load->view($this->template, $this->data, TRUE);
		$footer = $this->load->view('/includes/_footer', array(), TRUE);

		$this->body_data = array(
								'title'		=> $this->app_name . ' ' . $this->title,
								'class' 	=> $this->class,
								'header' 	=> $header,
								'body'		=> $body,
								'footer'	=> $footer
							);
		
		$this->load->view('page', $this->body_data);
	}
}

?>