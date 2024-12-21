<?php

namespace App\Controllers;
use App\Models\DBtableDetailKelasKuliah;
use App\Controllers\BaseController;

class DetailKelasKuliah extends BaseController
{
    public function index()
	{
        $search = $this->request->getVar('search'); // Ambil inputan search
        $data = $this->getAllData($search);
		echo view('tableDetailKelasKuliah', $data);
	}

    public function getAllData($search = null){
        $generatedID = $this->generateId();
        $tableDetailKelasKuliah = new DBtableDetailKelasKuliah();
        // Query untuk search
        if ($search) {
            $tableDetailKelasKuliah = $tableDetailKelasKuliah->like('nama_mata_kuliah', $search);
        }
        // $data['tableDetailKelasKuliah'] = $tableDetailKelasKuliah->findAll();
        // $data['getLastID'] = $generatedID;
         // Tambahkan pagination
        $data = [
            'tableDetailKelasKuliah' => $tableDetailKelasKuliah->paginate(5), // Data dengan 10 record per halaman
            'pager' => $tableDetailKelasKuliah->pager, // Objek pager
            'getLastID' => $generatedID,
            'search' => $search // Kirim search input kembali ke view
        ];
        // Dapatkan query terakhir
        // $lastQuery = $tableDetailKelasKuliah->db->getLastQuery();

        // // cek query di browser
        // echo '<pre>' . $lastQuery . '</pre>';exit;
        return $data;
    }

    public function generateId()
    {
        $tableDetailKelasKuliah = new DBtableDetailKelasKuliah();
        // Ambil ID terakhir dari tabel dbkelaskuliah
        $lastRecord = $tableDetailKelasKuliah->select('id_kelas_kuliah')
                                ->orderBy('id_kelas_kuliah', 'DESC')
                                ->first();

        if (!$lastRecord) {
            return '0002c1f3-87d1-4871-82b8-145bf96fca01';
        }
    
        // Ambil ID terakhir
        $lastID = $lastRecord['id_kelas_kuliah']; // Contoh: '0002c1f3-87d1-4871-82b8-145bf96fca100'
    
        // Ekstrak angka di akhir ID menggunakan regex
        preg_match('/(\d+)$/', $lastID, $matches);
        $lastNumber = isset($matches[1]) ? intval($matches[1]) : 0;
    
        // Tambahkan increment
        $newNumber = $lastNumber + 1;
    
        // Format ulang menjadi ID baru
        $newID = '0002c1f3-87d1-4871-82b8-145bf96fca' . $newNumber;
    
        return $newID;
    }

    public function generateId_semester()
    {
        $tableDetailPerkuliahanMahasiswa = new DBtableDetailKelasKuliah();
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
        "id_kelas_kuliah" => [
            "label" => "ID Kelas Kuliah",
            "rules" => "required"
        ],
    ];
    $validation->setRules($validationRules);
    //    $validation->setRules(['id_kelas_kuliah' => 'required']);
    //    $isDataValid = $validation->withRequest($this->request)->run();
       $data = $this->getAllData();
       $semester = $this->request->getPost('tahun')."/".$this->request->getPost('tahun2');
       // Cek data yg dikirim post
       // echo '<pre>';
       // print_r($this->request->getPost());
       // echo '</pre>';exit;
         // jika data valid, simpan ke database
         if($validation->withRequest($this->request)->run()){
            $tableDetailKelasKuliah = new DBtableDetailKelasKuliah();
            $tableDetailKelasKuliah->insert([
                "id_kelas_kuliah" => $this->request->getPost('id_kelas_kuliah'),
                "id_prodi" => $this->generateRandomID(),
                "id_matkul" => $this->generateRandomID(),
                "nama_program_studi" => $this->request->getPost('nama_program_studi'),
                "nama_mata_kuliah" => $this->request->getPost('nama_mata_kuliah'),
                "nama_semester" => $semester,
                "kapasitas" => $this->request->getPost('kapasitas'),
                "prodi_penyelenggara" => $this->request->getPost('prodi_penyelenggara'),
                "perguruan_tinggi_penyelenggara" => $this->request->getPost('perguruan_tinggi_penyelenggara'),
                "id_semester" => $this->generateId_semester(),
            ]);
           
            return redirect()->to('table/tableDetailKelasKuliah');
        }else{
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
		
        // tampilkan form create
        echo view('tableDetailKelasKuliah', $data);
    }

	public function edit($id_kelas_kuliah){
        // Ambil data yang akan diedit
        $tableDetailKelasKuliah = new DBtableDetailKelasKuliah();
        $data['tableDetailKelasKuliah'] = $tableDetailKelasKuliah->where('id_kelas_kuliah', $id_kelas_kuliah)->first();
    //     echo '<pre>';
    //    print_r($data);
    //    echo '</pre>';exit;
        // Validasi data yang diubah
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id_kelas_kuliah' => 'required',
            // Tambahkan aturan validasi untuk field lainnya jika diperlukan
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        $semester = $this->request->getPost('tahun')."/".$this->request->getPost('tahun2');
        if ($isDataValid) {
            // Jika data valid, lakukan update
            $tableDetailKelasKuliah->update($id_kelas_kuliah, [
                "id_kelas_kuliah" => $this->request->getPost('id_kelas_kuliah'),
                "nama_program_studi" => $this->request->getPost('nama_program_studi'),
                "nama_mata_kuliah" => $this->request->getPost('nama_mata_kuliah'),
                "nama_semester" => $semester,
                "kapasitas" => $this->request->getPost('kapasitas'),
                "prodi_penyelenggara" => $this->request->getPost('prodi_penyelenggara'),
                "perguruan_tinggi_penyelenggara" => $this->request->getPost('perguruan_tinggi_penyelenggara'),
            ]);
            // Redirect ke halaman tableDetailKelasKuliah
            return redirect()->to('table/tableDetailKelasKuliah');
        }

        // Tampilkan form edit
        return view('edittableDetailKelasKuliah', $data);
    }


    public function delete($id_kelas_kuliah){
        $tableDetailKelasKuliah = new DBtableDetailKelasKuliah();
        $tableDetailKelasKuliah->delete($id_kelas_kuliah);
        return redirect('table/tableDetailKelasKuliah');
    }

    function generateRandomID($length = 28) {
        // Menghasilkan bytes acak dan konversi ke format heksadesimal
        return substr(bin2hex(random_bytes(14)), 0, $length);
    }

    // public function cari()
    // {
    //     $tableDetailKelasKuliah = new DBtableDetailKelasKuliah();
    //     $cariData = $this->request->getGet('search');

    //     $data['tableDetailKelasKuliah'] = $tableDetailKelasKuliah->cariData($cariData);

    //     return view('tableDetailKelasKuliah', $data);
    // }
}
