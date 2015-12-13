<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Profiles extends CI_Migration {
	public function up() {
		$fields = array(
					'id' => array(
								'type' => 'INT',
								'auto_increment' => TRUE
							),
					'user_id' => array(
								'type' => 'INT'
							),
					'last_name' => array(
									'type' => 'VARCHAR',
									'constraint' => 255
								),
					'first_name' => array(
									'type' => 'VARCHAR',
									'constraint' => 255
								),
					'middle_name' => array(
									'type' => 'VARCHAR',
									'constraint' => 255,
									'default' => NULL
								),
					'sex' => array(
									'type' => 'VARCHAR',
									'constraint' => 10
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

		$this->dbforge->create_table('profiles');
	}

	public function down() {
		$this->dbforge->drop_table('profiles');
	}
}

?>