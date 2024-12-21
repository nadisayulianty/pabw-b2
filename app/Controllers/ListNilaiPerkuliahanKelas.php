<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DBtableListNilaiPerkuliahanKelas;

class ListNilaiPerkuliahanKelas extends BaseController
{
    public function index()
    {
        $search = $this->request->getVar('search');
        $data = $this->GetDataFilter($search);
        echo view('list-nilai-perkuliahan-kelas', $data);
    }

    public function GetDataFilter($search = null)
    {
        $listNilaiPerkuliahanKelas = new DBtableListNilaiPerkuliahanKelas();

        if ($search) {
            $listNilaiPerkuliahanKelas = $listNilaiPerkuliahanKelas->like('nama_mata_kuliah', $search);
        }
        $data['listNilaiPerkuliahanKelas'] = $listNilaiPerkuliahanKelas->paginate(5);

        $data['pager'] = $listNilaiPerkuliahanKelas->pager;
        $data['search'] = $search;
        return $data;
    }

    public function create()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['nama_mata_kuliah' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if ($isDataValid) {
            $listNilaiPerkuliahanKelas = new DBtableListNilaiPerkuliahanKelas();
            $listNilaiPerkuliahanKelas->insert([
                "id_matkul" => bin2hex(random_bytes(16)),
                "nama_mata_kuliah" => $this->request->getPost('nama_mata_kuliah'),
                "nama_prodi" => $this->request->getPost('nama_prodi'),
                "nama_kelas_kuliah" => $this->request->getPost('nama_kelas_kuliah'),
                "sks_mata_kuliah" => $this->request->getPost('sks_mata_kuliah'),
                "jumlah_mahasiswa_krs" => $this->request->getPost('jumlah_mahasiswa_krs'),
            ]);
            return redirect()->to('table/list-nilai-perkuliahan-kelas');
        }

        // tampilkan form create
        echo view('list-nilai-perkuliahan-kelas');
    }

    public function edit($no)
    {
        // Ambil data yang akan diedit
        $listNilaiPerkuliahanKelas = new DBtableListNilaiPerkuliahanKelas();
        $data['listNilaiPerkuliahanKelas'] = $listNilaiPerkuliahanKelas->where('id_matkul', $no)->first();

        // Validasi data yang diubah
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama_mata_kuliah' => 'required',
            // Tambahkan aturan validasi untuk field lainnya jika diperlukan
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            // Jika data valid, lakukan update
            $listNilaiPerkuliahanKelas->update($no, [
                "nama_mata_kuliah" => $this->request->getPost('nama_mata_kuliah'),
                "nama_prodi" => $this->request->getPost('nama_prodi'),
                "nama_kelas_kuliah" => $this->request->getPost('nama_kelas_kuliah'),
                "sks_mata_kuliah" => $this->request->getPost('sks_mata_kuliah'),
                "jumlah_mahasiswa_krs" => $this->request->getPost('jumlah_mahasiswa_krs'),
            ]);

            // Redirect ke halaman list-nilai-perkuliahan-kelas
            return redirect()->to('table/list-nilai-perkuliahan-kelas');
        }

        // Tampilkan form edit
        return view('editlist-nilai-perkuliahan-kelas', $data);
    }


    public function delete($no)
    {
        $listNilaiPerkuliahanKelas = new DBtableListNilaiPerkuliahanKelas();
        $listNilaiPerkuliahanKelas->delete($no);
        return redirect('table/list-nilai-perkuliahan-kelas');
    }
}
