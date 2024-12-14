<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DBprofilPt;


class ProfilPt extends BaseController
{
    public function index()
    {
        $profilPt = new DBprofilPt();
        $data['profilPt'] = $profilPt->findAll();
        echo view('profil-pt', $data);
    }

    public function create()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['nama_perguruan_tinggi' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if ($isDataValid) {
            $profilPt = new DBprofilPt();
            $profilPt->insert([
                "nama_perguruan_tinggi" => $this->request->getPost('nama_perguruan_tinggi'),
                "telepon" => $this->request->getPost('telepon'),
                "faximile" => $this->request->getPost('faximile'),
                "email" => $this->request->getPost('email'),
                "website" => $this->request->getPost('website'),
                "jalan" => $this->request->getPost('jalan'),
                "dusun" => $this->request->getPost('dusun'),
                "rt_rw" => $this->request->getPost('rt_rw'),
                "kelurahan" => $this->request->getPost('kelurahan'),
                "kode_pos" => $this->request->getPost('kode_pos'),
            ]);
            return redirect()->to('table/profil-pt');
        }

        // tampilkan form create
        echo view('profil-pt');
    }

    public function edit($no)
    {
        // Ambil data yang akan diedit
        $profilPt = new DBprofilPt();
        $data['profilPt'] = $profilPt->where('id', $no)->first();

        // Validasi data yang diubah
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama_perguruan_tinggi' => 'required',
            // Tambahkan aturan validasi untuk field lainnya jika diperlukan
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            // Jika data valid, lakukan update
            $profilPt->update($no, [
                "nama_perguruan_tinggi" => $this->request->getPost('nama_perguruan_tinggi'),
                "telepon" => $this->request->getPost('telepon'),
                "faximile" => $this->request->getPost('faximile'),
                "email" => $this->request->getPost('email'),
                "website" => $this->request->getPost('website'),
                "jalan" => $this->request->getPost('jalan'),
                "dusun" => $this->request->getPost('dusun'),
                "rt_rw" => $this->request->getPost('rt_rw'),
                "kelurahan" => $this->request->getPost('kelurahan'),
                "kode_pos" => $this->request->getPost('kode_pos'),
            ]);

            // Redirect ke halaman profil-pt
            return redirect()->to('table/profil-pt');
        }

        // Tampilkan form edit
        return view('editprofil-pt', $data);
    }


    public function delete($no)
    {
        $profilPt = new DBprofilPt();
        $profilPt->delete($no);
        return redirect('table/profil-pt');
    }
}
