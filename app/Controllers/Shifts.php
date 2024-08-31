<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ShiftModel;
use CodeIgniter\HTTP\ResponseInterface;

class Shifts extends BaseController
{
    public function index()
    {
        $model = new ShiftModel();
        $data['shifts'] = $model->findAll();
        return view('shifts/index', $data);
    }

    public function create()
    {
        return view('shifts/create');
    }

    public function store()
    {
        $model = new ShiftModel();
        $model->save([
            'shift_name' => $this->request->getPost('shift_name'),
            'start_time' => $this->request->getPost('start_time'),
            'end_time' => $this->request->getPost('end_time'),
        ]);

        return redirect()->to('/shifts');
    }
}
