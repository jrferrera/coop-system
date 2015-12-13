<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Users extends CI_Migration {
	public function up() {
		$fields = array(
					'id' => array(
								'type' => 'INT',
								'auto_increment' => TRUE
							),
					'email' => array(
								'type' => 'VARCHAR',
								'constraint' => 100
							),
					'password' => array(
									'type' => 'VARCHAR',
									'constraint' => 32
								),
					'created_at' => array(
									'type' => 'DATETIME',
									'default' => NULL
								),
					'updated_at' => array(
									'type' => 'DATETIME',
									'default' => NULL
								),
					'deleted_at' => array(
									'type' => 'DATETIME',
									'default' => NULL
								)
				);

		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->add_field($fields);

		$this->dbforge->create_table('users');
	}

	public function down() {
		$this->dbforge->drop_table('users');
	}
}

?>