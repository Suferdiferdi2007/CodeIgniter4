<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Koleksipribadi extends Migration
{
    public function up()
    {
        $this->forge->addfield([
            'KoleksiID' => [
                'type'  => 'INT',
                'constraint'    => 11,
                'unsigned' => TRUE,
                'auto_increment'    => TRUE
            ],
            'UserID' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'BukuID' => [
                'type' => 'INT',
                'constraint' => 11
            ],
        ]);
        $this->forge->addkey('KoleksiID', TRUE);
        $this->forge->createTable('koleksipribadi');
    }

    public function down()
    {
        $this->forge->dropTable('koleksipribadi');
    }
}
