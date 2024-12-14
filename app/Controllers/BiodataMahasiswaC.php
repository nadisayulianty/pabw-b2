<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BiodataMahasiswa;
use App\Helpers\IdHelper;


class BiodataMahasiswaC extends BaseController
{
    protected $biodataMahasiswaModel;

    public function __construct()
    {
        $this->biodataMahasiswaModel = new BiodataMahasiswa();
    }

    public function index()
    {
        $data['biodata'] = $this->biodataMahasiswaModel->findAll();
        return view('biodata/index', $data);
    }

    public function create()
    {
        return view('biodata/create');
    }

    public function store()
    {
        $validationRule = $this->biodataMahasiswaModel->getValidationRules();
        $biodata = $this->request->getPost();
        $biodata['id_mahasiswa'] = $this->biodataMahasiswaModel->generateIdMahasiswa();

        if (!$this->biodataMahasiswaModel->validate($biodata)) {
            $errors = $this->biodataMahasiswaModel->errors();
            
            log_message('error', 'Validation Errors: ' . print_r($errors, true));
            log_message('error', 'Biodata Data: ' . print_r($biodata, true));

            return redirect()->back()
                ->withInput()
                ->with('errors', $errors);
        }

        try {
            $saved = $this->biodataMahasiswaModel->insert($biodata);
            
            if ($saved) {
                return redirect()->to('biodata-mahasiswa')->with('success', 'Biodata Mahasiswa created successfully.');
            } else {
                log_message('error', 'Insert Failed Errors: ' . print_r($this->biodataMahasiswaModel->errors(), true));
                
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
        $data['biodata'] = $this->biodataMahasiswaModel->find($id);
        return view('biodata/edit', $data);
    }

    public function update($id)
    {
        $validationRule = $this->biodataMahasiswaModel->getValidationRules();
        
        if (!$this->validate($validationRule)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $productData = $this->request->getPost();
        
        if ($this->biodataMahasiswaModel->update($id, $productData)) {
            return redirect()->to('biodata-mahasiswa')->with('success', 'Biodata Mahasiswa updated successfully.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to update product.');
        }
    }

    public function delete($id)
    {
        if ($this->biodataMahasiswaModel->delete($id)) {
            return redirect()->to('biodata-mahasiswa')->with('success', 'Biodata Mahasiswa deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to delete product.');
        }
    }
}
