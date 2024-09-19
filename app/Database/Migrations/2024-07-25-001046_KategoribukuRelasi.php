<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class kategoribukurelasi extends migration
{
    public function up()
    {
        $this->forge->addfield([
            'KategoriBukuID' => [
                'type' => 'INT',
                'constrant' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'BukuID' =>[
                'type' => 'INT',
                'constrant' => 11
            ],
            'KategoriID' => [
                'type' => 'INT',
                'constraint' =>  11
            ]
        ]);
        $this->forge->addkey('KategoriBukuID', TRUE);
        $this->forge->createTable('kategoribuku_relasi');
    }
    public function down()
    {
        $this->forge->dropTable('kategoribuku_relasi');
    }
}