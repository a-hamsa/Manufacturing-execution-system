<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOperatorsTable extends Migration
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
            'operator_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'shift_id'    => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
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
        $this->forge->addForeignKey('shift_id', 'shifts', 'id', 'CASCADE', 'CASCADE'); // Relating to shifts table
        $this->forge->createTable('operators');
    }

    public function down()
    {
        $this->forge->dropTable('operators');
    }
}
