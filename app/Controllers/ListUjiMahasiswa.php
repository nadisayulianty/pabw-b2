<?php namespace App\Controllers;

use App\Models\DBlistujimahasiswa;
use CodeIgniter\Exceptions\Pageid_dosentFoundException;

class ListUjiMahasiswa extends BaseController
{
	public function index()
	{
		$list_uji_mahasiswa = new DBlistujimahasiswa();
        // $data['list_uji_mahasiswa'] = $list_uji_mahasiswa->findAll();

        $search = $this->request->getGet('search');
        if ($search) {
            $list_uji_mahasiswa->like('nama_dosen',$search);
        }

        $data['list_uji_mahasiswa'] = $list_uji_mahasiswa->paginate(5);
        $data['pager'] = $list_uji_mahasiswa->pager;
        $data['search']=$search;

		echo view('list_uji_mahasiswa', $data);
	}

	public function create()
    {
       // lakukan validasi
       $validation =  \Config\Services::validation();
       $validation->setRules(['id_dosen' => 'required']);
       $isDataValid = $validation->withRequest($this->request)->run();

         // jika data valid, simpan ke database
         if($isDataValid){
            $list_uji_mahasiswa = new DBlistujimahasiswa();
            $list_uji_mahasiswa->insert([
                "id_aktivitas" => $this->request->getPost('id_aktivitas'),
                "judul" => $this->request->getPost('judul'),
                "id_uji" => $this->request->getPost('id_uji'),
                "id_kategori_kegiatan" => $this->request->getPost('id_kategori_kegiatan'),
                "nama_kategori_kegiatan" => $this->request->getPost('nama_kategori_kegiatan'),
                "id_dosen" => $this->request->getPost('id_dosen'),
                "nidn" => $this->request->getPost('nidn'),
                "nama_dosen" => $this->request->getPost('nama_dosen'),
                "penguji_ke" => $this->request->getPost('penguji_ke'),
                "status_sync" => $this->request->getPost('status_sync'),
            ]);
            return redirect()->to('table/list_uji_mahasiswa');
        }
		
        // tampilkan form create
        echo view('list_uji_mahasiswa');
    }

	public function edit($id_dosen)
    {
    // Ambil data yang akan diedit
    $list_uji_mahasiswa = new DBlistujimahasiswa();
    $data['list_uji_mahasiswa'] = $list_uji_mahasiswa->where('id_dosen', $id_dosen)->first();

    // Validasi data yang diubah
    $validation =  \Config\Services::validation();
    $validation->setRules([
        'id_dosen' => 'required',
        // Tambahkan aturan validasi untuk field lainnya jika diperlukan
    ]);
    $isDataValid = $validation->withRequest($this->request)->run();

    if ($isDataValid) {
        // Jika data valid, lakukan update
        $list_uji_mahasiswa->update($id_dosen, [
                "id_aktivitas" => $this->request->getPost('id_aktivitas'),
                "judul" => $this->request->getPost('judul'),
                "id_uji" => $this->request->getPost('id_uji'),
                "id_kategori_kegiatan" => $this->request->getPost('id_kategori_kegiatan'),
                "nama_kategori_kegiatan" => $this->request->getPost('nama_kategori_kegiatan'),
                "id_dosen" => $this->request->getPost('id_dosen'),
                "nidn" => $this->request->getPost('nidn'),
                "nama_dosen" => $this->request->getPost('nama_dosen'),
                "penguji_ke" => $this->request->getPost('penguji_ke'),
                "status_sync" => $this->request->getPost('status_sync'),
            
        ]);

        // Redirect ke halaman table5a
        return redirect()->to('table/list_uji_mahasiswa');
    }

    // Tampilkan form edit
    return view('edittablelist_uji_mahasiswa', $data);
}


		public function delete($id_dosen)
    {
        $list_uji_mahasiswa = new DBlistujimahasiswa();
        $list_uji_mahasiswa->delete($id_dosen);
        return redirect('table/list_uji_mahasiswa');
    }

    public function cari()
    {
        $list_uji_mahasiswa = new DBlistujimahasiswa();
        $cariData = $this->request->getGet('search');

        $data['list_uji_mahasiswa'] = $list_uji_mahasiswa->cariData($cariData);

        return view('list_uji_mahasiswa', $data);
    }


}