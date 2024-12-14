<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DBlistMataKuliah;

class ListMataKuliah extends BaseController
{
    public function index()
    {
        $listMataKuliah = new DBlistMataKuliah();
        $data['listMataKuliah'] = $listMataKuliah->findAll();
        echo view('list-mata-kuliah', $data);
    }

    public function create()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['nama_mata_kuliah' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if ($isDataValid) {
            $listMataKuliah = new DBlistMataKuliah();
            $listMataKuliah->insert([
                "id_matkul" => bin2hex(random_bytes(16)),
                "kode_mata_kuliah" => $this->request->getPost('kode_mata_kuliah'),
                "nama_mata_kuliah" => $this->request->getPost('nama_mata_kuliah'),
                "sks_mata_kuliah" => $this->request->getPost('sks_mata_kuliah'),
                "nama_program_studi" => $this->request->getPost('nama_program_studi'),
            ]);
            return redirect()->to('table/list-mata-kuliah');
        }

        // tampilkan form create
        echo view('list-mata-kuliah');
    }

    public function edit($no)
    {
        // Ambil data yang akan diedit
        $listMataKuliah = new DBlistMataKuliah();
        $data['listMataKuliah'] = $listMataKuliah->where('id_matkul', $no)->first();

        // Validasi data yang diubah
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama_mata_kuliah' => 'required',
            // Tambahkan aturan validasi untuk field lainnya jika diperlukan
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            // Jika data valid, lakukan update
            $listMataKuliah->update($no, [
                "kode_mata_kuliah" => $this->request->getPost('kode_mata_kuliah'),
                "nama_mata_kuliah" => $this->request->getPost('nama_mata_kuliah'),
                "sks_mata_kuliah" => $this->request->getPost('sks_mata_kuliah'),
                "nama_program_studi" => $this->request->getPost('nama_program_studi'),
            ]);

            // Redirect ke halaman list-mata-kuliah
            return redirect()->to('table/list-mata-kuliah');
        }

        // Tampilkan form edit
        return view('editlist-mata-kuliah', $data);
    }


    public function delete($no)
    {
        $listMataKuliah = new DBlistMataKuliah();
        $listMataKuliah->delete($no);
        return redirect('table/list-mata-kuliah');
    }
}
