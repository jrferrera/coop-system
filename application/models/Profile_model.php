<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*	
 *	Profile Associations
 *		belongs to user
*/

class Profile_Model extends CI_Model {
	public function __construct() {
		parent::__construct();

	}

	public function get_by_user($id) {
		$this->db->where('user_id', $id);

		return $this->db->get('profiles')->row();
	}
}

?>