<?php

namespace App\Models;

use CodeIgniter\Model;

class WorkOrderModel extends Model
{
    protected $table      = 'work_orders';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $returnType       = 'array';

    protected $allowedFields    = ['order_number', 'machine_id', 'operator_id', 'status', 'start_date', 'end_date'];
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';

    public function getWorkOrdersWithDetails()
    {
        return $this->select('work_orders.*, machines.machine_name, operators.operator_name')
            ->join('machines', 'machines.id = work_orders.machine_id', 'left')
            ->join('operators', 'operators.id = work_orders.operator_id', 'left')
            ->findAll();
    }
}
