<?php namespace App\Controllers;

use App\Models\DBrfd;
use CodeIgniter\Exceptions\Pageid_aktivitastFoundException;

class Tablerfd extends BaseController
{
	public function index()
	{
		$rfd = new DBrfd();
        $data['rfd'] = $rfd->findAll();
        
        return view('rfd', $data);
    }

	public function create()
    {
         // lakukan validasi
            $validation =  \Config\Services::validation();
            $validation->setRules([
                "id_dosen" => "required",
                "nidn" => "required",
                "nama_dosen" => "required",
                "id_jabatan_fungsional" => "required",
                "nama_jabatan_fungsional" => "required",
                "sk_jabatan_fungsional" => "required",
                "mulai_sk_jabatan" => "required",

            ]);
            $isDataValid = $validation->withRequest($this->request)->run();

            // jika data valid, simpan ke database
            if($isDataValid){
                $rfd = new DBrfd();
                $rfd->insert([
                    "id_dosen" => $this->request->getPost('id_dosen'),
                    "nidn" => $this->request->getPost('nidn'),
                    "nama_dosen" => $this->request->getPost('nama_dosen'),
                    "id_jabatan_fungsional" => $this->request->getPost('id_jabatan_fungsional'),
                    "nama_jabatan_fungsional" => $this->request->getPost('nama_jabatan_fungsional'),
                    "sk_jabatan_fungsional" => $this->request->getPost('sk_jabatan_fungsional'),
                    "mulai_sk_jabatan" => $this->request->getPost('mulai_sk_jabatan'),

                ]);
                
                return redirect()->to('table/rfd');
            }
        
		
        // tampilkan form create
        return redirect()->to('table/rfd');
    }        
	public function edit($no)
{
    $rfd = new DBrfd();
    $data['rfd'] = $rfd->find($no);

    // Validasi data yang diubah
    $validation =  \Config\Services::validation();
    $validation->setRules([
        "id_dosen" => "required",
        "nidn" => "required",
        "nama_dosen" => "required",
        "id_jabatan_fungsional" => "required",
        "nama_jabatan_fungsional" => "required",
        "sk_jabatan_fungsional" => "required",
        "mulai_sk_jabatan" => "required",

        // Tambahkan aturan validasi untuk field lainnya jika diperlukan
    ]);
    $isDataValid = $validation->withRequest($this->request)->run();

    if ($isDataValid) {
        // Jika data valid, lakukan update
        $rfd->update($no, [
            "id_dosen" => $this->request->getPost('id_dosen'),
            "nidn" => $this->request->getPost('nidn'),
            "nama_dosen" => $this->request->getPost('nama_dosen'),
            "id_jabatan_fungsional" => $this->request->getPost('id_jabatan_fungsional'),
            "nama_jabatan_fungsional" => $this->request->getPost('nama_jabatan_fungsional'),
            "sk_jabatan_fungsional" => $this->request->getPost('sk_jabatan_fungsional'),
            "mulai_sk_jabatan" => $this->request->getPost('mulai_sk_jabatan'),

            // Tambahkan field lainnya jika perlu


        ]);

        // Redirect ke halaman table5b
        return redirect()->to('table/rfd');
    }

    //terakhir sampai sini

    // Tampilkan form edit
    return view('editrfd', $data);
}


		public function delete($no){
        $rfd = new DBrfd();
        $rfd->delete($no);
        return redirect('table/rfd');
    }

    public function cari()
    {
        $rfd = new DBrfd();
        $cariData = $this->request->getGet('search');

        $data['rfd'] = $rfd->cariData($cariData);

        return view('rfd', $data);
    }

    public function preview(){
        $rfd = new DBrfd();
        $data['rfd'] = $rfd->findAll();
        return view('showrfd', $data);
    }


}