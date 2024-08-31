<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateWorkOrdersTable extends Migration
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
            'order_number' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'machine_id'   => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ],
            'operator_id'  => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ],
            'status'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'start_date'   => [
                'type' => 'DATE',
            ],
            'end_date'     => [
                'type' => 'DATE',
            ],
            'created_at'   => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at'   => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('machine_id', 'machines', 'id', 'CASCADE', 'CASCADE'); // Foreign key to machines
        $this->forge->addForeignKey('operator_id', 'operators', 'id', 'CASCADE', 'CASCADE'); // Foreign key to operators
        $this->forge->createTable('work_orders');
    }

    public function down()
    {
        $this->forge->dropTable('work_orders');
    }
}
