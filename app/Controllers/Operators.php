<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OperatorModel;
use App\Models\ShiftModel;
use CodeIgniter\HTTP\ResponseInterface;

class Operators extends BaseController
{
    public function index()
    {
        $operatorModel = new OperatorModel();
        $operators = $operatorModel->getOperatorsWithShifts();
        
        return view('operators/index', ['operators' => $operators]);
    }

    public function create()
    {
        $shiftModel = new ShiftModel();
        $data['shifts'] = $shiftModel->findAll();
        return view('operators/create', $data);
    }

    public function store()
    {
        $model = new OperatorModel();
        $model->save([
            'operator_name' => $this->request->getPost('operator_name'),
            'shift_id' => $this->request->getPost('shift_id'),
        ]);

        return redirect()->to('/operators');
    }
}
