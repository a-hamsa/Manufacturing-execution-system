<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMachinesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'machine_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'status'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('machines');
    }

    public function down()
    {
        $this->forge->dropTable('machines');
    }
}
