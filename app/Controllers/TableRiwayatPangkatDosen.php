<?php

namespace App\Controllers;
use App\Models\DBtableriwayatpangkatdosen;

use App\Controllers\BaseController;

class TableRiwayatPangkatDosen extends BaseController
{
    public function index()
	{
		$data = $this->get_all_data();
		echo view('tableriwayatpangkatdosen', $data);
	}
    public function get_all_data(){
        $model = model(DBtableriwayatpangkatdosen::class);

        return [
            'tableriwayatpangkatdosen' => $model->paginate(10),
            'pager' => $model->pager,
        ];
    }

	public function create()
    {
       // lakukan validasi
       $validation =  \Config\Services::validation();
       $validation->setRules(['nidn' => 'required']);
       $isDataValid = $validation->withRequest($this->request)->run();
       $data = $this->get_all_data();
         // jika data valid, simpan ke database
         if($isDataValid){
            $tableriwayatpangkatdosen = new DBtableriwayatpangkatdosen();
            $tableriwayatpangkatdosen->insert([
                "id_dosen" => $this->generateRandomString(),
                "nidn" => $this->request->getPost('nidn'),
                "nama_dosen" => $this->request->getPost('nama_dosen'),
                "id_pangkat_golongan" => $this->generateRandomString(),
                "nama_pangkat_golongan" => $this->request->getPost('nama_pangkat_golongan'),
                "sk_pangkat" => $this->request->getPost('sk_pangkat'),
                "tanggal_sk_pangkat" => $this->request->getPost('tanggal_sk_pangkat'),
                "mulai_sk_pangkat" => $this->request->getPost('mulai_sk_pangkat'),
                "masa_kerja_dalam_tahun" => $this->request->getPost('masa_kerja_dalam_tahun'),
                "masa_kerja_dalam_bulan" => $this->request->getPost('masa_kerja_dalam_bulan')
                
            ]);
            return redirect()->to('table/tableriwayatpangkatdosen');
        }
		
        // tampilkan form create
        $data['errors'] = $validation->getErrors();
        echo view('tableriwayatpangkatdosen', $data);

    }

	public function edit($no)
{
    // Ambil data yang akan diedit
    $tableriwayatpangkatdosen = new DBtableriwayatpangkatdosen();
    $data['tableriwayatpangkatdosen'] = $tableriwayatpangkatdosen->where('id_dosen', $no)->first();

    // Validasi data yang diubah
    $validation =  \Config\Services::validation();
    $validation->setRules([
        'nidn' => 'required',
        // Tambahkan aturan validasi untuk field lainnya jika diperlukan
    ]);
    $isDataValid = $validation->withRequest($this->request)->run();

    if ($isDataValid) {
        // Jika data valid, lakukan update
        $tableriwayatpangkatdosen->update($no, [
            "id_dosen" => $this->generateRandomString(),
            "nidn" => $this->request->getPost('nidn'),
            "nama_dosen" => $this->request->getPost('nama_dosen'),
            "id_pangkat_golongan" => $this->generateRandomString(),
            "nama_pangkat_golongan" => $this->request->getPost('nama_pangkat_golongan'),
            "sk_pangkat" => $this->request->getPost('sk_pangkat'),
            "tanggal_sk_pangkat" => $this->request->getPost('tanggal_sk_pangkat'),
            "mulai_sk_pangkat" => $this->request->getPost('mulai_sk_pangkat'),
            "masa_kerja_dalam_tahun" => $this->request->getPost('masa_kerja_dalam_tahun'),
            "masa_kerja_dalam_bulan" => $this->request->getPost('masa_kerja_dalam_bulan')
        ]);

        // Redirect ke halaman tableriwayatpangkatdosen
        return redirect()->to('table/tableriwayatpangkatdosen');
    }

    // Tampilkan form edit
    return view('edittableriwayatpangkatdosen', $data);
}


	public function delete($no){
        $tableriwayatpangkatdosen = new DBtableriwayatpangkatdosen();
        $tableriwayatpangkatdosen->delete($no);
        return redirect('table/tableriwayatpangkatdosen');
    }

    public function cari()
    {
        $tableriwayatpangkatdosen = new DBtableriwayatpangkatdosen();
        $cariData = $this->request->getGet('search');

        $data['tableriwayatpangkatdosen'] = $tableriwayatpangkatdosen->cariData($cariData);

        return view('tableriwayatpangkatdosen', $data);
    }
    function generateRandomString($length = 20) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}

