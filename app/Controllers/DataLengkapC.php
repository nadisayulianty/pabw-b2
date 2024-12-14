<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataLengkap;
use App\Helpers\IdHelper;

class DataLengkapC extends BaseController
{
    protected $dataLengkapModel;

    public function __construct()
    {
        $this->dataLengkapModel = new DataLengkap();
    }

    public function index()
    {
        $data['data_lengkap'] = $this->dataLengkapModel->findAll();
        return view('data-lengkap/index', $data);
    }

    public function create()
    {
        return view('data-lengkap/create');
    }

    public function store()
    {
        $validationRule = $this->dataLengkapModel->getValidationRules();
        $data_lengkap = $this->request->getPost();
        $data_lengkap['id_mahasiswa'] = $this->dataLengkapModel->generateIdMahasiswa();

        if (!$this->dataLengkapModel->validate($data_lengkap)) {
            $errors = $this->dataLengkapModel->errors();
            
            log_message('error', 'Validation Errors: ' . print_r($errors, true));
            log_message('error', 'Biodata Data: ' . print_r($data_lengkap, true));

            return redirect()->back()
                ->withInput()
                ->with('errors', $errors);
        }

        try {
            $saved = $this->dataLengkapModel->insert($data_lengkap);
            
            if ($saved) {
                return redirect()->to('data-lengkap')->with('success', 'Biodata Mahasiswa created successfully.');
            } else {
                log_message('error', 'Insert Failed Errors: ' . print_r($this->dataLengkapModel->errors(), true));
                
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
        $data['data_lengkap'] = $this->dataLengkapModel->find($id);
        return view('data-lengkap/edit', $data);
    }

    public function update($id)
    {
        $validationRule = $this->dataLengkapModel->getValidationRules();
        
        if (!$this->validate($validationRule)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $productData = $this->request->getPost();
        
        if ($this->dataLengkapModel->update($id, $productData)) {
            return redirect()->to('data-lengkap')->with('success', 'Biodata Mahasiswa updated successfully.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to update product.');
        }
    }

    public function delete($id)
    {
        if ($this->dataLengkapModel->delete($id)) {
            return redirect()->to('data-lengkap')->with('success', 'Biodata Mahasiswa deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to delete product.');
        }
    }
}
