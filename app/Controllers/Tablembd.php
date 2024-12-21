<?php namespace App\Controllers;

use App\Models\DBmbd;
use CodeIgniter\Exceptions\Pageid_aktivitastFoundException;

class Tablembd extends BaseController
{
	public function index()
	{
		$mbd = new DBmbd();
        $data['mbd'] = $mbd->paginate(5);
        $data['pager'] = $mbd->pager;
        $data['total'] = $mbd->countAll();
        $data['page'] = $this->request->getVar('page_mbd') ? $this->request->getVar('page_mbd') : 1;
        $data['perPage'] = 5;
        
        return view('mbd', $data);
    }

	public function create()
    {
         // lakukan validasi
            $validation =  \Config\Services::validation();
            $validation->setRules([
                'id_aktivitas' => 'required',
                'judul' => 'required',
                'id_bimbing_mahasiswa' => 'required',
                'id_kategori_kegiatan' => 'required',
                'nama_kategori_kegiatan' => 'required',
                'id_dosen' => 'required',
                'nidn' => 'required',
                'nama_dosen' => 'required',
                'pembimbing_ke' => 'required',
            ]);
            $isDataValid = $validation->withRequest($this->request)->run();

            // jika data valid, simpan ke database
            if($isDataValid){
                $mbd = new DBmbd();
                $mbd->insert([
                    "id_aktivitas" => $this->request->getPost('id_aktivitas'),
                    "judul" => $this->request->getPost('judul'),
                    "id_bimbing_mahasiswa" => $this->request->getPost('id_bimbing_mahasiswa'),
                    "id_kategori_kegiatan" => $this->request->getPost('id_kategori_kegiatan'),
                    "nama_kategori_kegiatan" => $this->request->getPost('nama_kategori_kegiatan'),
                    "id_dosen" => $this->request->getPost('id_dosen'),
                    "nidn" => $this->request->getPost('nidn'),
                    "nama_dosen" => $this->request->getPost('nama_dosen'),
                    "pembimbing_ke" => $this->request->getPost('pembimbing_ke'),
                ]);
                return redirect()->to('table/mbd');
            }
        
		
        // tampilkan form create
        echo view('mbd');
    }

	public function edit($no)
{
    $mbd = new DBmbd();
    $data['mbd'] = $mbd->find($no);

    // Validasi data yang diubah
    $validation =  \Config\Services::validation();
    $validation->setRules([
        'id_aktivitas' => 'required',
        'judul' => 'required',
        'id_bimbing_mahasiswa' => 'required',
        'id_kategori_kegiatan' => 'required',
        'nama_kategori_kegiatan' => 'required',
        'id_dosen' => 'required',
        'nidn' => 'required',
        'nama_dosen' => 'required',
        'pembimbing_ke' => 'required',
        // Tambahkan aturan validasi untuk field lainnya jika diperlukan
    ]);
    $isDataValid = $validation->withRequest($this->request)->run();

    if ($isDataValid) {
        // Jika data valid, lakukan update
        $mbd->update($no, [
            "id_aktivitas" => $this->request->getPost('id_aktivitas'),
            "judul" => $this->request->getPost('judul'),
            "id_bimbing_mahasiswa" => $this->request->getPost('id_bimbing_mahasiswa'),
            "id_kategori_kegiatan" => $this->request->getPost('id_kategori_kegiatan'),
            "nama_kategori_kegiatan" => $this->request->getPost('nama_kategori_kegiatan'),
            "id_dosen" => $this->request->getPost('id_dosen'),
            "nidn" => $this->request->getPost('nidn'),
            "nama_dosen" => $this->request->getPost('nama_dosen'),
            "pembimbing_ke" => $this->request->getPost('pembimbing_ke'),

        ]);

        // Redirect ke halaman table5b
        return redirect()->to('table/mbd');
    }

    //terakhir sampai sini

    // Tampilkan form edit
    return view('editmbd', $data);
}


		public function delete($no){
        $mbd = new DBmbd();
        $mbd->delete($no);
        return redirect('table/mbd');
    }

    public function cari()
    {
        $mbd = new DBmbd();
        $cariData = $this->request->getGet('search');

        $data['mbd'] = $mbd->cariData($cariData);

        return view('mbd', $data);
    }


}