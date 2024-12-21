<?php

namespace App\Controllers\Rasyad;

use App\Controllers\BaseController;
use App\Models\Rasyad\WilayahModel;

class Wilayah extends BaseController
{
    public function index()
    {
        $data = $this->getWilayah();
        return view('rasyad/wilayah', $data);
    }

    public function getWilayah()
    {
        $model = model(WilayahModel::class);
        $model->orderBy('id_wilayah', 'DESC');

        return [
            'wilayah' => $model->paginate(5),
            'pager' => $model->pager
        ];
    }

    public function save()
    {
        // lakukan validasi
        $validation = \Config\Services::validation();
        $validation->setRules([
            'id_wilayah' => 'permit_empty|numeric',
            'id_level_wilayah' => 'required',
            'id_negara' => 'required',
            'nama_wilayah' => 'required',
            'id_induk_wilayah' => 'required'
        ]);

        $isDataValid = $validation->withRequest($this->request)->run();
        $errors = $validation->getErrors();

        // jika data valid, simpan ke database
        if ($isDataValid) {
            $wilayahModel = new WilayahModel();

            $data = $validation->getValidated();

            $idWilayah = $this->request->getPost('id_wilayah');

            if ($idWilayah) {
                $wilayahModel->update($idWilayah, $data);
            } else {
                $wilayahModel->insert($data);
            }

            return redirect()->to('table/wilayah')->with('success', 'Data berhasil disimpan');
        }

        $data = $this->getWilayah();
        $data['errors'] = $errors;

        echo view('rasyad/wilayah', $data);
    }

    public function delete($id)
    {
        $wilayahModel = new WilayahModel();
        $wilayahModel->delete($id);

        return redirect()->to('table/wilayah')->with('success', 'Data berhasil dihapus');
    }
}
