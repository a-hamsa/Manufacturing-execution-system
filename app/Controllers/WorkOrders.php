<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MachineModel;
use App\Models\OperatorModel;
use App\Models\WorkOrderModel;
use CodeIgniter\HTTP\ResponseInterface;

class WorkOrders extends BaseController
{
    public function index()
    {
        $workOrderModel = new WorkOrderModel();
        $work_orders = $workOrderModel->getWorkOrdersWithDetails();
        
        return view('work_orders/index', ['work_orders' => $work_orders]);
    }

    public function create()
    {
        $machineModel = new MachineModel();
        $operatorModel = new OperatorModel();

        $data['machines'] = $machineModel->findAll();
        $data['operators'] = $operatorModel->findAll();

        return view('work_orders/create', $data);
    }

    public function store()
    {
        $model = new WorkOrderModel();
        $model->save([
            'order_number' => $this->request->getPost('order_number'),
            'machine_id' => $this->request->getPost('machine_id'),
            'operator_id' => $this->request->getPost('operator_id'),
            'status' => $this->request->getPost('status'),
            'start_date' => $this->request->getPost('start_date'),
            'end_date' => $this->request->getPost('end_date'),
        ]);

        return redirect()->to('/work_orders');
    }
}
