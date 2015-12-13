<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*	
 *	User Associations
 *		has one profile
 *		has one role
*/

class User_model extends CI_Model {
	public function __construct() {
		parent::__construct();

		$this->load->model('role_model', 'role');
	}

	public function create($data) {
		$user_data = array(
						'email' => $data['email'],
						'password' => md5($data['password'])
					);

		$this->db->insert('users', $user_data);

		$user_id = $this->db->insert_id();

		$profile_data = array(
							'user_id' => $user_id,
							'last_name' => $data['last_name'],
							'first_name' => $data['first_name'],
							'middle_name' => $data['middle_name'],
							'sex' => $data['sex']
						);

		$this->db->insert('profiles', $profile_data);

		$role_data = array(
						'user_id' => $user_id,
						'position' => $data['position'],
						'permissions' => $this->role->options($data['position'])['position']
					);

		$this->db->insert('roles', $role_data);
	}

	public function search() {
		$this->db->select('u.id, u.email, u.password, u.created_at, p.last_name, p.first_name, p.middle_name, p.sex, r.position, r.permissions');
		$this->db->join('profiles p', 'u.id = p.user_id');
		$this->db->join('roles r', 'u.id = r.user_id');

		return $this->db->get('users u')->result();
	}

	public function get_by_credentials($email, $password) {
		$this->db->where('email', $email);
		$this->db->where('password', md5($password));

		return $this->db->get('users')->row();
	}

	public function get_by_id($id) {
		$this->db->join('profiles p', 'u.id = p.user_id');
		$this->db->join('roles r', 'u.id = r.user_id');
		$this->db->where('u.id', $id);

		return $this->db->get('users u')->row();
	}
}

?>