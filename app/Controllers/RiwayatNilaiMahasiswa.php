<?php

namespace App\Controllers;
use App\Models\DBtableRiwayatNilaiMahasiswa;
use App\Controllers\BaseController;

class RiwayatNilaiMahasiswa extends BaseController
{
    public function index()
	{
        $search = $this->request->getVar('search'); // Ambil inputan search
        $data = $this->getAllData($search);
		echo view('tableRiwayatNilaiMahasiswa', $data);
	}

    public function getAllData($search = null){
        $generatedID = $this->generateId();
        $tableRiwayatNilaiMahasiswa = new DBtableRiwayatNilaiMahasiswa();
        // Query untuk search
        if ($search) {
            $tableRiwayatNilaiMahasiswa = $tableRiwayatNilaiMahasiswa->like('nim', $search);
        }
        // $data['tableRiwayatNilaiMahasiswa'] = $tableRiwayatNilaiMahasiswa->findAll();
        // $data['getLastID'] = $generatedID;
         // Tambahkan pagination
        $data = [
            'tableRiwayatNilaiMahasiswa' => $tableRiwayatNilaiMahasiswa->paginate(5), // Data dengan 10 record per halaman
            'pager' => $tableRiwayatNilaiMahasiswa->pager, // Objek pager
            'getLastID' => $generatedID,
            'search' => $search // Kirim search input kembali ke view
        ];
        // Dapatkan query terakhir
        // $lastQuery = $tableRiwayatNilaiMahasiswa->db->getLastQuery();

        // // cek query di browser
        // echo '<pre>' . $lastQuery . '</pre>';exit;
        return $data;
    }
    // public function index()
	// {
    //     $data = $this->getAllData();
	// 	echo view('tableRiwayatNilaiMahasiswa', $data);
	// }

    // public function getAllData(){
    //     $generatedID = $this->generateId();
    //     $generateRandomID = $this->generateRandomID();
    //     $tableRiwayatNilaiMahasiswa = new DBtableRiwayatNilaiMahasiswa();
    //     $data['tableRiwayatNilaiMahasiswa'] = $tableRiwayatNilaiMahasiswa->findAll();
    //     $data['getLastID'] = $generatedID;
    //     $data['generateRandomID'] = $generateRandomID;
    //     return $data;
    // }

    public function generateId()
    {
        $tableRiwayatNilaiMahasiswa = new DBtableRiwayatNilaiMahasiswa();
        // Ambil ID terakhir dari tabel dbkelaskuliah
        $lastRecord = $tableRiwayatNilaiMahasiswa->select('id_registrasi_mahasiswa')
                                ->orderBy('id_registrasi_mahasiswa', 'DESC')
                                ->first();

        if (!$lastRecord) {
            return 'yfugwq9754-bsy8-46ff-8590-46504hb3v1';
        }
    
        // Ambil ID terakhir
        $lastID = $lastRecord['id_registrasi_mahasiswa']; // Contoh: '0002c1f3-87d1-4871-82b8-145bf96fca100'
    
        // Ekstrak angka di akhir ID menggunakan regex
        preg_match('/(\d+)$/', $lastID, $matches);
        $lastNumber = isset($matches[1]) ? intval($matches[1]) : 0;
    
        // Tambahkan increment
        $newNumber = $lastNumber + 1;
    
        // Format ulang menjadi ID baru
        $newID = 'yfugwq9754-bsy8-46ff-8590-46504hb3v' . $newNumber;
    
        return $newID;
    }

    function generateRandomID($length = 28) {
        // Menghasilkan bytes acak dan konversi ke format heksadesimal
        return substr(bin2hex(random_bytes(14)), 0, $length);
    }
    
    public function predikat($nilai){
        $predikat = ($nilai >= 80 && $nilai <= 100) ? "A" : 
                    (($nilai >= 70 && $nilai < 80) ? "B" : 
                    (($nilai >= 60 && $nilai < 70) ? "C" : 
                    (($nilai >= 0 && $nilai < 60) ? "D" : "Nilai tidak valid")));

        return $predikat;
    }

	public function create()
    {
       // lakukan validasi
       $validation =  \Config\Services::validation();
    //    $validation->setRules(['id_registrasi_mahasiswa' => 'required']);
    //    $isDataValid = $validation->withRequest($this->request)->run();
        $validationRules = [
            "id_registrasi_mahasiswa" => [
                "label" => "ID Registrasi Mahasiswa",
                "rules" => "required"
            ],
            "nama_program_studi" => [
                "label" => "Nama Program Studi",
                "rules" => "required"
            ],
            "nama_mata_kuliah" => [
                "label" => "Nama Mata Kuliah",
                "rules" => "required"
            ],
            "nama_kelas_kuliah" => [
                "label" => "Nama Kelas Kuliah",
                "rules" => "required"
            ],
            "sks_mata_kuliah" => [
                "label" => "SKS Mata Kuliah",
                "rules" => "required|decimal",
                "errors" => [
                    "decimal" => "Gagal input, Kolom {field} harus berupa angka desimal, contoh 3.00."
                ]
            ],
            "nim" => [
                "label" => "NIM",
                "rules" => "required|numeric",
                "errors" => [
                    "numeric" => "Gagal input, Kolom {field} hanya boleh berisi angka saja."
                ]
            ],
            "nama_mahasiswa" => [
                "label" => "Nama Mahasiswa",
                "rules" => "required"
            ],
            "angkatan" => [
                "label" => "Angkatan",
                "rules" => "required|numeric",
                "errors" => [
                    "numeric" => "Gagal input, Kolom {field} harus berupa angka."
                ]
            ],
            "nilai_angka" => [
                "label" => "Nilai Matkul",
                "rules" => "integer",
                "errors" => [
                    "integer" => "Gagal input, Kolom {field} harus berupa bilangan bulat."
                ]
            ],
        ];
        $validation->setRules($validationRules);
       $data = $this->getAllData();
       $getpredikat = $this->predikat($this->request->getPost('nilai_angka'));
       // Cek data yg dikirim post
        //    echo '<pre>';
        //    print_r($this->request->getPost());
        //    echo '</pre>';exit;
         // jika data valid, simpan ke database
         if($validation->withRequest($this->request)->run()){
            $tableRiwayatNilaiMahasiswa = new DBtableRiwayatNilaiMahasiswa();
            $tableRiwayatNilaiMahasiswa->insert([
                "id_registrasi_mahasiswa" => $this->request->getPost('id_registrasi_mahasiswa'),
                "nama_program_studi" => $this->request->getPost('nama_program_studi'),
                "nama_mata_kuliah" => $this->request->getPost('nama_mata_kuliah'),
                "nama_kelas_kuliah" => $this->request->getPost('nama_kelas_kuliah'),
                "sks_mata_kuliah" => $this->request->getPost('sks_mata_kuliah'),
                "nim" => $this->request->getPost('nim'),
                "nama_mahasiswa" => $this->request->getPost('nama_mahasiswa'),
                "angkatan" => $this->request->getPost('angkatan'),
                "nilai_angka" => $this->request->getPost('nilai_angka'),
                "nilai_huruf" => $getpredikat,
                "id_prodi" => $this->generateRandomID(),
                "id_matkul" => $this->generateRandomID(),
                "id_kelas" => $this->generateRandomID(),
            ]);
           
            return redirect()->to('table/tableRiwayatNilaiMahasiswa');
        }else{
            // Jika validasi gagal, tampilkan pesan error
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
		
        // tampilkan form create
        echo view('tableRiwayatNilaiMahasiswa', $data);
    }

	public function edit($id_registrasi_mahasiswa){
        // Ambil data yang akan diedit
        $tableRiwayatNilaiMahasiswa = new DBtableRiwayatNilaiMahasiswa();
        $data['tableRiwayatNilaiMahasiswa'] = $tableRiwayatNilaiMahasiswa->where('id_registrasi_mahasiswa', $id_registrasi_mahasiswa)->first();
        $getpredikat = $this->predikat($this->request->getPost('nilai_angka'));

        // Validasi data yang diubah
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id_registrasi_mahasiswa' => 'required',
            // Tambahkan aturan validasi untuk field lainnya jika diperlukan
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            // Jika data valid, lakukan update
            $tableRiwayatNilaiMahasiswa->update($id_registrasi_mahasiswa, [
                "id_registrasi_mahasiswa" => $this->request->getPost('id_registrasi_mahasiswa'),
                "nama_program_studi" => $this->request->getPost('nama_program_studi'),
                "nama_mata_kuliah" => $this->request->getPost('nama_mata_kuliah'),
                "nama_kelas_kuliah" => $this->request->getPost('nama_kelas_kuliah'),
                "sks_mata_kuliah" => $this->request->getPost('sks_mata_kuliah'),
                "nim" => $this->request->getPost('nim'),
                "nama_mahasiswa" => $this->request->getPost('nama_mahasiswa'),
                "angkatan" => $this->request->getPost('angkatan'),
                "nilai_angka" => $this->request->getPost('nilai_angka'),
                "nilai_huruf" => $getpredikat,
            ]);
            // Redirect ke halaman tableRiwayatNilaiMahasiswa
            return redirect()->to('table/tableRiwayatNilaiMahasiswa');
        }

        // Tampilkan form edit
        return view('edittableRiwayatNilaiMahasiswa', $data);
    }


    public function delete($id_registrasi_mahasiswa){
        $tableRiwayatNilaiMahasiswa = new DBtableRiwayatNilaiMahasiswa();
        $tableRiwayatNilaiMahasiswa->delete($id_registrasi_mahasiswa);
        return redirect('table/tableRiwayatNilaiMahasiswa');
    }
}
