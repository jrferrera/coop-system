<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_Model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	public function get_types() {
		$types = array(
					'member',
					'non-member',
					'supplier'
				);

		return $types;
	}

	public function get_by_id($id) {
		$this->db->where('id', $id);

		return $this->db->get('members')->row();
	}
}

?>