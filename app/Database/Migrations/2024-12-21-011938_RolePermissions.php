<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RolePermissions extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'role_id'       => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'can_create'        => [
				'type' => 'BOOLEAN',
                'default' => true,
                'null' => false,
			],
            'can_update'        => [
				'type' => 'BOOLEAN',
                'default' => true,
                'null' => false,
			],
            'can_delete'        => [
				'type' => 'BOOLEAN',
                'default' => true,
                'null' => false,
			],
            'can_read'        => [
				'type' => 'BOOLEAN',
                'default' => true,
                'null' => false,
			],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

        $this->forge->addForeignKey('role_id', 'roles', 'id', 'CASCADE', 'CASCADE');

		$this->forge->createTable('role_permissions', TRUE);
    }

    public function down()
    {
        // menghapus tabel news
		$this->forge->dropTable('role_permissions');
    }
}
