<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Songs extends Migration
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

            'song_name' => [
                'type' => 'VARCHAR',
                'constraint' => 128
            ],

            'artist_name' => [
                'type' => 'VARCHAR',
                'constraint' => 128
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->createTable('songs');
    }

    public function down()
    {
        $this->forge->dropTable('songs');
    }
}
