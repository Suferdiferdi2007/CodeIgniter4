<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kategoribuku extends Migration
{
    public function up()
    {
        $this->forge->addfield([
            'KategoriID' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'NamaKategori' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ]
        ]);
        $this->forge->addkey('KategoriID');
        $this->forge->createTable('kategoribuku');
    }

    public function down()
    {
        $this->forge->droptable('kategoribuku');
    }
}

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
