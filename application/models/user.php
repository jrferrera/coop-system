<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	public function get_by_credentials($email, $password) {
		$this->db->where('email', $email);
		$this->db->where('password', md5($password));

		return $this->db->get('users')->row();
	}

	public function get_by_id($id) {
		$this->db->where('id', $id);

		return $this->db->get('users')->row();
	}
}

?>