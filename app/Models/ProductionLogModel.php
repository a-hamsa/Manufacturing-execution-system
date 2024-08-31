<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductionLogModel extends Model
{
    protected $table = 'production_logs';
    protected $primaryKey = 'id';
    protected $allowedFields = ['work_order_id', 'machine_id', 'operator_id', 'product_id', 'quantity_produced', 'production_date'];

    public function getLogsWithDetails()
    {
        return $this->select('production_logs.*, work_orders.order_number, machines.machine_name, operators.operator_name, products.product_name')
            ->join('work_orders', 'work_orders.id = production_logs.work_order_id', 'left')
            ->join('machines', 'machines.id = production_logs.machine_id', 'left')
            ->join('operators', 'operators.id = production_logs.operator_id', 'left')
            ->join('products', 'products.id = production_logs.product_id', 'left')
            ->findAll();
    }
}
