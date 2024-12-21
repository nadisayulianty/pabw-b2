<?php

namespace App\Controllers;
use App\Models\DBtablelistanggotaaktivitasmahasiswa;

use App\Controllers\BaseController;

class TableListAnggotaAktivitasMahasiswa extends BaseController
{
    public function index()
	{
		$data = $this->get_all_data();
		echo view('tablelistanggotaaktivitasmahasiswa', $data);
	}
    public function get_all_data(){
        $tablelistanggotaaktivitasmahasiswa = new DBtablelistanggotaaktivitasmahasiswa();
        $data['tablelistanggotaaktivitasmahasiswa'] = $tablelistanggotaaktivitasmahasiswa->findAll();
        return $data;
    }

	public function create()
    {
       // lakukan validasi
       $validation =  \Config\Services::validation();
       $validation->setRules(['nim' => 'required']);
       $isDataValid = $validation->withRequest($this->request)->run();
       $data = $this->get_all_data();
         // jika data valid, simpan ke database
         if($isDataValid){
            $tablelistanggotaaktivitasmahasiswa = new DBtablelistanggotaaktivitasmahasiswa();
            $tablelistanggotaaktivitasmahasiswa->insert([
                "id_aktivitas" => $this->generateRandomString(),
                "judul" => $this->request->getPost('judul'),
                "id_anggota" => $this->generateRandomString(),
                "id_registrasi_mahasiswa" => $this->generateRandomString(),
                "nim" => $this->request->getPost('nim'),
                "nama_mahasiswa" => $this->request->getPost('nama_mahasiswa'),
                "jenis_peran" => $this->request->getPost('jenis_peran'),
                "nama_jenis_peran" => $this->request->getPost('nama_jenis_peran'),
                "status_sync" => $this->request->getPost('status_sync')
            ]);
            return redirect()->to('table/tablelistanggotaaktivitasmahasiswa');
        }
		
        // tampilkan form create
        $data['errors'] = $validation->getErrors();
        echo view('tablelistanggotaaktivitasmahasiswa', $data);

    }

	public function edit($no)
{
    // Ambil data yang akan diedit
    $tablelistanggotaaktivitasmahasiswa = new DBtablelistanggotaaktivitasmahasiswa();
    $data['tablelistanggotaaktivitasmahasiswa'] = $tablelistanggotaaktivitasmahasiswa->where('id_aktivitas', $no)->first();

    // Validasi data yang diubah
    $validation =  \Config\Services::validation();
    $validation->setRules([
        'nim' => 'required',
        // Tambahkan aturan validasi untuk field lainnya jika diperlukan
    ]);
    $isDataValid = $validation->withRequest($this->request)->run();

    if ($isDataValid) {
        // Jika data valid, lakukan update
        $tablelistanggotaaktivitasmahasiswa->update($no, [
            "id_aktivitas" => $this->generateRandomString(),
                "judul" => $this->request->getPost('judul'),
                "id_anggota" => $this->generateRandomString(),
                "id_registrasi_mahasiswa" => $this->generateRandomString(),
                "nim" => $this->request->getPost('nim'),
                "nama_mahasiswa" => $this->request->getPost('nama_mahasiswa'),
                "jenis_peran" => $this->request->getPost('jenis_peran'),
                "nama_jenis_peran" => $this->request->getPost('nama_jenis_peran'),
                "status_sync" => $this->request->getPost('status_sync')
        ]);

        // Redirect ke halaman tablelistanggotaaktivitasmahasiswa
        return redirect()->to('table/tablelistanggotaaktivitasmahasiswa');
    }

    // Tampilkan form edit
    return view('edittablelistanggotaaktivitasmahasiswa', $data);
}


	public function delete($no){
        $tablelistanggotaaktivitasmahasiswa = new DBtablelistanggotaaktivitasmahasiswa();
        $tablelistanggotaaktivitasmahasiswa->delete($no);
        return redirect('table/tablelistanggotaaktivitasmahasiswa');
    }

    public function cari()
    {
        $tablelistanggotaaktivitasmahasiswa = new DBtablelistanggotaaktivitasmahasiswa();
        $cariData = $this->request->getGet('search');

        $data['tablelistanggotaaktivitasmahasiswa'] = $tablelistanggotaaktivitasmahasiswa->cariData($cariData);

        return view('tablelistanggotaaktivitasmahasiswa', $data);
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
