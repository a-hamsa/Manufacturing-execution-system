<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductionLogsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'work_order_id' => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ],
            'machine_id' => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ],
            'operator_id' => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ],
            'product_id' => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ],
            'quantity_produced' => [
                'type'       => 'INT',
                'constraint' => 10,
            ],
            'production_date' => [
                'type' => 'DATE',
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

        // Add primary key
        $this->forge->addKey('id', true);

        // Add foreign keys
        $this->forge->addForeignKey('work_order_id', 'work_orders', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('machine_id', 'machines', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('operator_id', 'operators', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('product_id', 'products', 'id', 'CASCADE', 'CASCADE');

        // Create the table
        $this->forge->createTable('production_logs');
    }

    public function down()
    {
        // Drop the table if rolled back
        $this->forge->dropTable('production_logs');
    }
}
