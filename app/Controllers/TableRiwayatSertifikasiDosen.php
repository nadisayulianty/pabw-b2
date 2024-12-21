<?php

namespace App\Controllers;
use App\Models\DBtableriwayatsertifikasidosen;

use App\Controllers\BaseController;

class TableRiwayatSertifikasiDosen extends BaseController
{
    public function index()
	{
		$data = $this->get_all_data();
		echo view('tableriwayatsertifikasidosen', $data);
	}
    public function get_all_data(){
        $tableriwayatsertifikasidosen = new DBtableriwayatsertifikasidosen();
        $data['tableriwayatsertifikasidosen'] = $tableriwayatsertifikasidosen->findAll();
        return $data;
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
            $tableriwayatsertifikasidosen = new DBtableriwayatsertifikasidosen();
            $tableriwayatsertifikasidosen->insert([
                "id_dosen" => $this->generateRandomString(),
                "nidn" => $this->request->getPost('nidn'),
                "nama_dosen" => $this->request->getPost('nama_dosen'),
                "nomor_peserta" => $this->request->getPost('nomor_peserta'),
                "id_bidang_studi" => $this->request->getPost('id_bidang_studi'),
                "nama_bidang_studi" => $this->request->getPost('nama_bidang_studi'),
                "id_jenis_sertifikasi" => $this->request->getPost('id_jenis_sertifikasi'),
                "nama_jenis_sertifikasi" => $this->request->getPost('nama_jenis_sertifikasi'),
                "tahun_sertifikasi" => $this->request->getPost('tahun_sertifikasi'),
                "sk_sertifikasi" => $this->request->getPost('sk_sertifikasi')
                
            ]);
            return redirect()->to('table/tableriwayatsertifikasidosen');
        }

        
        $data['errors'] = $validation->getErrors();
        echo view('tableriwayatsertifikasidosen', $data);

    }

	public function edit($no)
{
    // Ambil data yang akan diedit
    $tableriwayatsertifikasidosen = new DBtableriwayatsertifikasidosen();
    $data['tableriwayatsertifikasidosen'] = $tableriwayatsertifikasidosen->where('id_dosen', $no)->first();

    // Validasi data yang diubah
    $validation =  \Config\Services::validation();
    $validation->setRules([
        'nidn' => 'required',
        // Tambahkan aturan validasi untuk field lainnya jika diperlukan
    ]);
    $isDataValid = $validation->withRequest($this->request)->run();

    if ($isDataValid) {
        // Jika data valid, lakukan update
        $tableriwayatsertifikasidosen->update($no, [
            "id_dosen" => $this->generateRandomString(),
                "nidn" => $this->request->getPost('nidn'),
                "nama_dosen" => $this->request->getPost('nama_dosen'),
                "nomor_peserta" => $this->request->getPost('nomor_peserta'),
                "id_bidang_studi" => $this->request->getPost('id_bidang_studi'),
                "nama_bidang_studi" => $this->request->getPost('nama_bidang_studi'),
                "id_jenis_sertifikasi" => $this->request->getPost('id_jenis_sertifikasi'),
                "nama_jenis_sertifikasi" => $this->request->getPost('nama_jenis_sertifikasi'),
                "tahun_sertifikasi" => $this->request->getPost('tahun_sertifikasi'),
                "sk_sertifikasi" => $this->request->getPost('sk_sertifikasi')
        ]);

        // Redirect ke halaman tableriwayatsertifikasidosen
        return redirect()->to('table/tableriwayatsertifikasidosen');
    }

    // Tampilkan form edit
    return view('edittableriwayatsertifikasidosen', $data);
}


	public function delete($no){
        $tableriwayatsertifikasidosen = new DBtableriwayatsertifikasidosen();
        $tableriwayatsertifikasidosen->delete($no);
        return redirect('table/tableriwayatsertifikasidosen');
    }

    public function cari()
    {
        $tableriwayatsertifikasidosen = new DBtableriwayatsertifikasidosen();
        $cariData = $this->request->getGet('search');

        $data['tableriwayatsertifikasidosen'] = $tableriwayatsertifikasidosen->cariData($cariData);

        return view('tableriwayatsertifikasidosen', $data);
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
