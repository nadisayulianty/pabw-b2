<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Menus extends Migration
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
			'nama'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
            'route'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('menus', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('menus');
    }
}
