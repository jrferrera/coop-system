<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Roles extends CI_Migration {
	public function up() {
		$fields = array(
					'id' => array(
								'type' => 'INT',
								'auto_increment' => TRUE
							),
					'user_id' => array(
								'type' => 'INT'
							),
					'position' => array(
								'type' => 'VARCHAR',
								'constraint' => 100
							),
					'permissions' => array(
								'type' => 'TEXT'
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

		$this->dbforge->create_table('roles');
	}

	public function down() {
		$this->dbforge->drop_table('roles');
	}
}

?>