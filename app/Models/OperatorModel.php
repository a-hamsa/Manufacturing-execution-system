<?php

namespace App\Models;

use CodeIgniter\Model;

class OperatorModel extends Model
{
    protected $table      = 'operators';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $returnType       = 'array';

    protected $allowedFields    = ['operator_name', 'shift_id'];
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';

    public function getOperatorsWithShifts()
    {
        return $this->select('operators.*, shifts.shift_name')
            ->join('shifts', 'shifts.id = operators.shift_id', 'left')
            ->findAll();
    }
}
