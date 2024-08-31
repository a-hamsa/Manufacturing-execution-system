<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MachineModel;
use App\Models\OperatorModel;
use App\Models\ProductionLogModel;
use App\Models\ProductModel;
use App\Models\WorkOrderModel;
use CodeIgniter\HTTP\ResponseInterface;

class ProductionLogs extends BaseController
{
    public function index()
    {
        $productionLogModel = new ProductionLogModel();
        $production_logs = $productionLogModel->getLogsWithDetails();
        
        return view('production_logs/index', ['production_logs' => $production_logs]);
    }

    public function create()
    {
        $workOrderModel = new WorkOrderModel();
        $machineModel = new MachineModel();
        $operatorModel = new OperatorModel();
        $productModel = new ProductModel();

        $data['work_orders'] = $workOrderModel->findAll();
        $data['machines'] = $machineModel->findAll();
        $data['operators'] = $operatorModel->findAll();
        $data['products'] = $productModel->findAll();

        return view('production_logs/create', $data);
    }

    public function store()
    {
        $model = new ProductionLogModel();
        $model->save([
            'work_order_id' => $this->request->getPost('work_order_id'),
            'machine_id' => $this->request->getPost('machine_id'),
            'operator_id' => $this->request->getPost('operator_id'),
            'product_id' => $this->request->getPost('product_id'),
            'quantity_produced' => $this->request->getPost('quantity_produced'),
            'production_date' => $this->request->getPost('production_date'),
        ]);

        return redirect()->to('/production_logs');
    }
}
