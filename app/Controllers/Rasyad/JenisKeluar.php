<?php

namespace App\Controllers\Rasyad;

use App\Controllers\BaseController;
use App\Models\Rasyad\JenisKeluar as ModelsJenisKeluar;

class JenisKeluar extends BaseController
{
    public function index()
    {
        $data['jenis_keluar'] = $this->getJenisKeluar();
        return view('rasyad/jenis_keluar', $data);
    }

    public function getJenisKeluar()
    {
        $jenisKeluar = new ModelsJenisKeluar();
        return $jenisKeluar->findAll();
    }

    public function save()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'id_jenis_keluar' => 'permit_empty|numeric',
            'jenis_keluar' => 'required',
            'apa_mahasiswa' => 'required|numeric'
        ]);

        $isDataValid = $validation->withRequest($this->request)->run();
        $errors = $validation->getErrors();

        if ($isDataValid) {
            $jenisKeluar = new ModelsJenisKeluar();

            $data = $validation->getValidated();

            $idJenisKeluar = $this->request->getPost('id_jenis_keluar');

            if ($idJenisKeluar) {
                $jenisKeluar->update($idJenisKeluar, $data);
            } else {
                $jenisKeluar->insert($data);
            }

            return redirect()->to('table/jenis-keluar');
        }

        echo view('rasyad/jenis_keluar', [
            'errors' => $errors,
            'jenisKeluar' => $this->getJenisKeluar()
        ]);
    }

    public function delete($id)
    {
        $jenisKeluar = new ModelsJenisKeluar();
        $jenisKeluar->delete($id);

        return redirect()->to('table/jenis-keluar');
    }
}
