<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Members extends CI_Migration {
	public function up() {
		$fields = array(
					'id' => array(
								'type' => 'INT',
								'auto_increment' => TRUE
							),
					'type' => array(
								'type' => 'VARCHAR',
								'constraint' => 100
							),
					'code' => array(
								'type' => 'VARCHAR',
								'constraint' => 100
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
									'constraint' => 255
								),
					'birthday' => array(
									'type' => 'DATE',
									'default' => NULL
								),
					'sex' => array(
									'type' => 'VARCHAR',
									'constraint' => 10
								),
					'civil_status' => array(
									'type' => 'VARCHAR',
									'constraint' => 100
								),
					'address' => array(
									'type' => 'TEXT',
									'default' => NULL
								),
					'contact_number' => array(
									'type' => 'VARCHAR',
									'constraint' => 255,
									'default' => NULL
								),
					'profile_picture' => array(
									'type' => 'VARCHAR',
									'constraint' => 255,
									'default' => NULL
								),
					'signature_picture' => array(
									'type' => 'VARCHAR',
									'constraint' => 255,
									'default' => NULL
								),
					'beneficiary' => array(
									'type' => 'TEXT',
									'constraint' => 255,
									'default' => NULL
								),
					'membership_start' => array(
									'type' => 'DATE',
									'default' => date('Y-m-d', time())
								),
					'date_closed' => array(
									'type' => 'DATETIME',
									'default' => NULL
								),
					'created_at' => array(
									'type' => 'DATETIME',
									'default' => date('Y-m-d H:i:s', time())
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

		$this->dbforge->create_table('members');
	}

	public function down() {
		$this->dbforge->drop_table('members');
	}
}

?>