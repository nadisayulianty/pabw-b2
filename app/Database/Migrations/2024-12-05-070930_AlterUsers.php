<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterUsers extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users', [
			'role_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ]
		]);

        $this->forge->addForeignKey('role_id', 'roles', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->forge->dropForeignKey('users', 'users_role_id_foreign');
        $this->forge->dropColumn('users', 'role_id');
    }
}
