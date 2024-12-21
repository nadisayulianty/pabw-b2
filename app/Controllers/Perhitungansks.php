<?php namespace App\Controllers;

use App\Models\DBperhitungansks;
use CodeIgniter\Exceptions\Pageid_dosentFoundException;

class Perhitungansks extends BaseController
{
	public function index()
	{
		$perhitungansks = new DBperhitungansks();
        // $data['perhitungansks'] = $perhitungansks->findAll();

        $data['perhitungansks'] = $perhitungansks->paginate(5);
        $data['pager'] = $perhitungansks->pager;

		echo view('perhitungansks', $data);
	}

	public function create()
    {
       // lakukan validasi
       $validation =  \Config\Services::validation();
       $validation->setRules(['id_dosen' => 'required']);
       $isDataValid = $validation->withRequest($this->request)->run();

         // jika data valid, simpan ke database
         if($isDataValid){
            $perhitungansks = new DBperhitungansks();
            $perhitungansks->insert([
                "id_kelas_kuliah" => $this->request->getPost('id_kelas_kuliah'),
                "id_registrasi_dosen" => $this->request->getPost('id_registrasi_dosen'),
                "id_dosen" => $this->request->getPost('id_dosen'),
                "nidn" => $this->request->getPost('nidn'),
                "nama_dosen" => $this->request->getPost('nama_dosen'),
                "nama_kelas_kuliah" => $this->request->getPost('nama_kelas_kuliah'),
                "id_substansi" => $this->request->getPost('id_substansi'),
                "nama_substansi" => $this->request->getPost('nama_substansi'),
                "rencana_minggu_pertemuan" => $this->request->getPost('rencana_minggu_pertemuan'),
                "perhitungan_sks" => $this->request->getPost('perhitungan_sks'),
            ]);
            return redirect()->to('table/perhitungansks');
        }
		
        // tampilkan form create
        echo view('perhitungansks');
    }

	public function edit($id_dosen)
    {
    // Ambil data yang akan diedit
    $perhitungansks = new DBperhitungansks();
    $data['perhitungansks'] = $perhitungansks->where('id_dosen', $id_dosen)->first();

    // Validasi data yang diubah
    $validation =  \Config\Services::validation();
    $validation->setRules([
        'id_dosen' => 'required',
        // Tambahkan aturan validasi untuk field lainnya jika diperlukan
    ]);
    $isDataValid = $validation->withRequest($this->request)->run();

    if ($isDataValid) {
        // Jika data valid, lakukan update
        $perhitungansks->update($id_dosen, [
                "id_kelas_kuliah" => $this->request->getPost('id_kelas_kuliah'),
                "id_registrasi_dosen" => $this->request->getPost('id_registrasi_dosen'),
                "id_dosen" => $this->request->getPost('id_dosen'),
                "nidn" => $this->request->getPost('nidn'),
                "nama_dosen" => $this->request->getPost('nama_dosen'),
                "nama_kelas_kuliah" => $this->request->getPost('nama_kelas_kuliah'),
                "id_substansi" => $this->request->getPost('id_substansi'),
                "nama_substansi" => $this->request->getPost('nama_substansi'),
                "rencana_minggu_pertemuan" => $this->request->getPost('rencana_minggu_pertemuan'),
                "perhitungansks" => $this->request->getPost('perhitungansks'),
            
        ]);

        // Redirect ke halaman table5a
        return redirect()->to('table/perhitungansks');
    }

    // Tampilkan form edit
    return view('edittableperhitungan_sks', $data);
}


		public function delete($id_dosen)
    {
        $perhitungansks = new DBperhitungansks();
        $perhitungansks->delete($id_dosen);
        return redirect('table/perhitungansks');
    }

    public function cari()
    {
        $perhitungansks = new DBperhitungansks();
        $cariData = $this->request->getGet('search');

        $data['perhitungansks'] = $perhitungansks->cariData($cariData);

        return view('perhitungansks', $data);
    }


}