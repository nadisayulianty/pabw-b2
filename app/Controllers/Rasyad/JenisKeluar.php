<?php

namespace App\Controllers\Rasyad;

use App\Controllers\BaseController;
use App\Models\Rasyad\JenisKeluar as ModelsJenisKeluar;

class JenisKeluar extends BaseController
{
    public function index()
    {
        $data = $this->getJenisKeluar();
        return view('rasyad/jenis_keluar', $data);
    }

    public function getJenisKeluar()
    {
        $model = model(ModelsJenisKeluar::class);
        $model->orderBy('id_jenis_keluar', 'DESC');

        $search = $this->request->getGet('search');

        if ($search) {
            $model->like('jenis_keluar', $search);
        }

        return [
            'jenis_keluar' => $model->paginate(5),
            'pager' => $model->pager,
            'search' => $search
        ];
    }

    public function save()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'id_jenis_keluar' => 'permit_empty|numeric',
            'jenis_keluar' => 'required',
            'apa_mahasiswa' => 'required|numeric'
        ], [
            'jenis_keluar' => [
                'required' => 'Jenis Keluar harus diisi'
            ],
            'apa_mahasiswa' => [
                'required' => 'Apa Mahasiswa harus diisi',
                'numeric' => 'Apa Mahasiswa harus berupa angka'
            ]
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

            return redirect()->to('table/jenis-keluar')->with('success', 'Data berhasil disimpan');
        }

        return redirect()->to('table/jenis-keluar')->with('errors', $errors);
    }

    public function delete($id)
    {
        $jenisKeluar = new ModelsJenisKeluar();
        $jenisKeluar->delete($id);

        return redirect()->to('table/jenis-keluar')->with('success', 'Data berhasil dihapus');
    }
}
