<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MachineModel;
use CodeIgniter\HTTP\ResponseInterface;

class Machines extends BaseController
{
    public function index()
    {
        $model = new MachineModel();
        $data['machines'] = $model->findAll();
        return view('machines/index', $data);
    }

    public function create()
    {
        return view('machines/create');
    }

    public function store()
    {
        $model = new MachineModel();
        $model->save([
            'machine_name' => $this->request->getPost('machine_name'),
            'status' => $this->request->getPost('status'),
        ]);

        return redirect()->to('/machines');
    }
}
