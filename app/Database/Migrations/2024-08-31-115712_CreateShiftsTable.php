<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateShiftsTable extends Migration
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
            'shift_name'   => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'start_time'   => [
                'type' => 'TIME',
            ],
            'end_time'     => [
                'type' => 'TIME',
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
        $this->forge->createTable('shifts');
    }

    public function down()
    {
        $this->forge->dropTable('shifts');
    }
}
