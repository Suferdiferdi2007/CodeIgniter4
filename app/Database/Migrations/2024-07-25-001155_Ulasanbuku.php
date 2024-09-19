<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ulasanbuku extends Migration
{
    public function up()
    {
        $this->forge->addfield([
            'UlasanID' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'UserID' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'BukuID' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'Ulasan' => [
                'type' => 'TEXT'
            ],
            'Rating' => [
                'type' => 'INT',
                'constraint' => 11
            ]
        ]);
        $this->forge->addPrimaryKey('UlasanID');
        $this->forge->createTable('ulasanbuku');
    }

    public function down()
    {
        $this->forge->dropTable('ulasanbuku');
    }
}
