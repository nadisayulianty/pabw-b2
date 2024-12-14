<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RiwayatPendidikan;
use App\Helpers\IdHelper;


class RiwayatPendidikanC extends BaseController
{
    protected $riwayatPendidikanModel;

    public function __construct()
    {
        $this->riwayatPendidikanModel = new RiwayatPendidikan();
    }

    public function index()
    {
        $data['riwayat_pendidikan'] = $this->riwayatPendidikanModel->findAll();
        return view('riwayat-pendidikan/index', $data);
    }

    public function create()
    {
        return view('riwayat-pendidikan/create');
    }

    public function store()
    {
        $validationRule = $this->riwayatPendidikanModel->getValidationRules();
        $biodata = $this->request->getPost();
        $biodata['id_mahasiswa'] = $this->riwayatPendidikanModel->generateIdMahasiswa();

        if (!$this->riwayatPendidikanModel->validate($biodata)) {
            $errors = $this->riwayatPendidikanModel->errors();
            
            log_message('error', 'Validation Errors: ' . print_r($errors, true));
            log_message('error', 'Biodata Data: ' . print_r($biodata, true));

            return redirect()->back()
                ->withInput()
                ->with('errors', $errors);
        }

        try {
            $saved = $this->riwayatPendidikanModel->insert($biodata);
            
            if ($saved) {
                return redirect()->to('riwayat-pendidikan')->with('success', 'Riwayat Pendidikan created successfully.');
            } else {
                log_message('error', 'Insert Failed Errors: ' . print_r($this->riwayatPendidikanModel->errors(), true));
                
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'Failed to create biodata.');
            }
        } catch (\Exception $e) {
            log_message('error', 'Exception in store method: ' . $e->getMessage());
            log_message('error', 'Exception Trace: ' . $e->getTraceAsString());
            
            return redirect()->back()
                ->withInput()
                ->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $data['biodata'] = $this->riwayatPendidikanModel->find($id);
        return view('riwayat-pendidikan/edit', $data);
    }

    public function update($id)
    {
        $validationRule = $this->riwayatPendidikanModel->getValidationRules();
        
        if (!$this->validate($validationRule)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $productData = $this->request->getPost();
        
        if ($this->riwayatPendidikanModel->update($id, $productData)) {
            return redirect()->to('riwayat-pendidikan')->with('success', 'Riwayat Pendidikan updated successfully.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to update product.');
        }
    }

    public function delete($id)
    {
        if ($this->riwayatPendidikanModel->delete($id)) {
            return redirect()->to('riwayat-pendidikan')->with('success', 'Riwayat Pendidikan deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to delete product.');
        }
    }
}
