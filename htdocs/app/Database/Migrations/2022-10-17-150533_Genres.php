<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Genres extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 64
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->createTable('blog');
    }

    public function down()
    {
        $this->forge->dropTable('Genres');
    }
}
