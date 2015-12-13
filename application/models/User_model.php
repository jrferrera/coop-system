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
						'password' => md5($data['password']),
						'created_at' => date('Y-m-d H:i:s', time())
					);

		$this->db->insert('users', $user_data);

		$user_id = $this->db->insert_id();

		$profile_data = array(
							'user_id' => $user_id,
							'last_name' => $data['last_name'],
							'first_name' => $data['first_name'],
							'middle_name' => $data['middle_name'],
							'sex' => $data['sex'],
							'created_at' => date('Y-m-d H:i:s', time())
						);

		$this->db->insert('profiles', $profile_data);

		$role_data = array(
						'user_id' => $user_id,
						'position' => $data['position'],
						'permissions' => $this->role->options($data['position'])['position'],
						'created_at' => date('Y-m-d H:i:s', time())
					);

		$this->db->insert('roles', $role_data);

		return TRUE;
	}

	public function update($data) {
		$id = $data['id'];

		$user_data = array(
						'email' => $data['email'],
						'password' => md5($data['password']),
						'updated_at' => date('Y-m-d H:i:s', time())
					);

		$this->db->where('id', $id);
		$this->db->update('users', $user_data);

		$profile_data = array(
							'last_name' => $data['last_name'],
							'first_name' => $data['first_name'],
							'middle_name' => $data['middle_name'],
							'sex' => $data['sex'],
							'updated_at' => date('Y-m-d H:i:s', time())
						);

		$this->db->where('user_id', $id);
		$this->db->update('profiles', $profile_data);

		$role_data = array(
						'position' => $data['position'],
						'permissions' => $this->role->options($data['position'])['position'],
						'updated_at' => date('Y-m-d H:i:s', time())
					);

		$this->db->where('user_id', $id);
		$this->db->update('roles', $role_data);

		return TRUE;
	}

	public function delete($id) {
		$this->db->where('id', $id);
		$this->db->delete('users');

		$this->db->where('user_id', $id);
		$this->db->delete('profiles');

		$this->db->where('user_id', $id);
		$this->db->delete('roles');

		return TRUE;
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
		$this->db->select('u.id, u.email, u.password, u.created_at, p.last_name, p.first_name, p.middle_name, p.sex, r.position, r.permissions');
		$this->db->join('profiles p', 'u.id = p.user_id');
		$this->db->join('roles r', 'u.id = r.user_id');
		$this->db->where('u.id', $id);

		return $this->db->get('users u')->row();
	}
}

?>