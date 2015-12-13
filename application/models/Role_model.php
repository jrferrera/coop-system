<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*	
 *	Role Associations
 *		belongs to user
*/

class Role_Model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	public function options($role = NULL) {
		$roles = array(
					'admin' => array(
									'position' => 'Admin',
									'permission' => 'All'
								)
				);

		if($role == NULL) {
			return $roles;
		}else {
			return $roles[$role];
		}
	}

	public function get_by_user($id) {
		$this->db->where('user_id', $id);

		return $this->db->get('roles')->row();
	}
}

?>