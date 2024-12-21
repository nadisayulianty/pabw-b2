<?php

namespace App\Controllers;
use App\Models\DBtableDetailPerkuliahanMahasiswa;
use App\Controllers\BaseController;

class DetailPerkuliahanMahasiswa extends BaseController
{
    public function index()
	{
        $data = $this->getAllData();
		echo view('tableDetailPerkuliahanMahasiswa', $data);
	}

    public function getAllData(){
        $generatedID = $this->generateId();
        $tableDetailPerkuliahanMahasiswa = new DBtableDetailPerkuliahanMahasiswa();
        $data['tableDetailPerkuliahanMahasiswa'] = $tableDetailPerkuliahanMahasiswa->findAll();
        $data['getLastID'] = $generatedID;
        return $data;
    }

    public function generateId()
    {
        $tableDetailPerkuliahanMahasiswa = new DBtableDetailPerkuliahanMahasiswa();
        // Ambil ID terakhir dari tabel dbkelaskuliah
        $lastRecord = $tableDetailPerkuliahanMahasiswa->select('id_registrasi_mahasiswa')
                                ->orderBy('id_registrasi_mahasiswa', 'DESC')
                                ->first();

        if (!$lastRecord) {
            return 'y278h384-k289-y34h-su38-19uw738p18g1';
        }
    
        // Ambil ID terakhir
        $lastID = $lastRecord['id_registrasi_mahasiswa']; // Contoh: '0002c1f3-87d1-4871-82b8-145bf96fca100'
    
        // Ekstrak angka di akhir ID menggunakan regex
        preg_match('/(\d+)$/', $lastID, $matches);
        $lastNumber = isset($matches[1]) ? intval($matches[1]) : 0;
    
        // Tambahkan increment
        $newNumber = $lastNumber + 1;
    
        // Format ulang menjadi ID baru
        $newID = 'y278h384-k289-y34h-su38-19uw738p18g' . $newNumber;
    
        return $newID;
    }

    public function generateId_semester()
    {
        $tableDetailPerkuliahanMahasiswa = new DBtableDetailPerkuliahanMahasiswa();
        // Ambil ID terakhir dari tabel dbkelaskuliah
        $lastRecord = $tableDetailPerkuliahanMahasiswa->select('id_semester')
                                ->orderBy('id_semester', 'DESC')
                                ->first();

        if (!$lastRecord) {
            return '1';
        }
    
        // Ambil ID terakhir
        $lastID = $lastRecord['id_semester']; // Contoh: '0002c1f3-87d1-4871-82b8-145bf96fca100'
    
        // Ekstrak angka di akhir ID menggunakan regex
        preg_match('/(\d+)$/', $lastID, $matches);
        $lastNumber = isset($matches[1]) ? intval($matches[1]) : 0;
    
        // Tambahkan increment
        $newNumber = $lastNumber + 1;
    
        // Format ulang menjadi ID baru
        $newID = $newNumber;
    
        return $newID;
    }


	public function create()
    {
       // lakukan validasi
       $validation =  \Config\Services::validation();
       $validationRules = [
        "id_registrasi_mahasiswa" => [
            "label" => "ID Registrasi Mahasiswa",
            "rules" => "required"
        ],
        "nama_program_studi" => [
            "label" => "Nama Program Studi",
            "rules" => "required"
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
        "ips" => [
            "label" => "IPS",
            "rules" => "required|decimal",
            "errors" => [
                "decimal" => "Gagal input, Kolom {field} harus berupa angka desimal, contoh 3.00."
            ]
        ],
        "ipk" => [
            "label" => "IPK",
            "rules" => "required|decimal",
            "errors" => [
                "decimal" => "Gagal input, Kolom {field} harus berupa angka desimal, contoh 3.00."
            ]
        ],
    ];
    $validation->setRules($validationRules);
    //    $validation->setRules(['id_registrasi_mahasiswa' => 'required']);
    //    $isDataValid = $validation->withRequest($this->request)->run();
       $data = $this->getAllData();
       $semester = $this->request->getPost('tahun')."/".$this->request->getPost('tahun2');
       // Cek data yg dikirim post
    //    echo '<pre>';
    //    print_r($this->request->getPost());
    //    echo '</pre>';exit;
         // jika data valid, simpan ke database
         if($validation->withRequest($this->request)->run()){
            $tableDetailPerkuliahanMahasiswa = new DBtableDetailPerkuliahanMahasiswa();
            $tableDetailPerkuliahanMahasiswa->insert([
                "id_registrasi_mahasiswa" => $this->request->getPost('id_registrasi_mahasiswa'),
                "nama_program_studi" => $this->request->getPost('nama_program_studi'),
                "angkatan" => $this->request->getPost('angkatan'),
                "nim" => $this->request->getPost('nim'),
                "id_status_mahasiswa" => "A",
                "nama_mahasiswa" => $this->request->getPost('nama_mahasiswa'),
                "nama_status_mahasiswa" => $this->request->getPost('nama_status_mahasiswa'),
                "ips" => $this->request->getPost('ips'),
                "ipk" => $this->request->getPost('ipk'),
                "sks_semester" => $this->request->getPost('sks_semester'),
                "sks_total" => $this->request->getPost('sks_total'),
                "id_prodi" => $this->generateRandomID(),
                "id_semester" => $this->generateId_semester(),
                "nama_semester" => $semester,
            ]);
           
            return redirect()->to('table/tableDetailPerkuliahanMahasiswa');
        }else{
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
		
        // tampilkan form create
        echo view('tableDetailPerkuliahanMahasiswa', $data);
    }

	public function edit($id_registrasi_mahasiswa){
        // Ambil data yang akan diedit
        $tableDetailPerkuliahanMahasiswa = new DBtableDetailPerkuliahanMahasiswa();
        $data['tableDetailPerkuliahanMahasiswa'] = $tableDetailPerkuliahanMahasiswa->where('id_registrasi_mahasiswa', $id_registrasi_mahasiswa)->first();

        // Validasi data yang diubah
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id_registrasi_mahasiswa' => 'required',
            // Tambahkan aturan validasi untuk field lainnya jika diperlukan
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        $semester = $this->request->getPost('tahun')."/".$this->request->getPost('tahun2');

        if ($isDataValid) {
            // Jika data valid, lakukan update
            $tableDetailPerkuliahanMahasiswa->update($id_registrasi_mahasiswa, [
                "id_registrasi_mahasiswa" => $this->request->getPost('id_registrasi_mahasiswa'),
                "nama_program_studi" => $this->request->getPost('nama_program_studi'),
                "angkatan" => $this->request->getPost('angkatan'),
                "nim" => $this->request->getPost('nim'),
                "id_status_mahasiswa" => "A",
                "nama_mahasiswa" => $this->request->getPost('nama_mahasiswa'),
                "nama_status_mahasiswa" => $this->request->getPost('nama_status_mahasiswa'),
                "ips" => $this->request->getPost('ips'),
                "ipk" => $this->request->getPost('ipk'),
                "sks_semester" => $this->request->getPost('sks_semester'),
                "sks_total" => $this->request->getPost('sks_total'),
                "nama_semester" => $semester,
            ]);
            // Redirect ke halaman tableDetailPerkuliahanMahasiswa
            return redirect()->to('table/tableDetailPerkuliahanMahasiswa');
        }

        // Tampilkan form edit
        return view('edittableDetailPerkuliahanMahasiswa', $data);
    }


    public function delete($id_registrasi_mahasiswa){
        $tableDetailPerkuliahanMahasiswa = new DBtableDetailPerkuliahanMahasiswa();
        $tableDetailPerkuliahanMahasiswa->delete($id_registrasi_mahasiswa);
        return redirect('table/tableDetailPerkuliahanMahasiswa');
    }

    function generateRandomID($length = 28) {
        // Menghasilkan bytes acak dan konversi ke format heksadesimal
        return substr(bin2hex(random_bytes(14)), 0, $length);
    }
}
