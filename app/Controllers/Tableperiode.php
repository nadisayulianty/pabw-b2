<?php namespace App\Controllers;

use App\Models\DBperiode;
use CodeIgniter\Exceptions\Pageid_proditFoundException;

class Tableperiode extends BaseController
{
	public function index()
	{
		$periode = new DBperiode();
        $data['periode'] = $periode->findAll();
        
        return view('periode', $data);
    }

	public function create()
    {
         // lakukan validasi
            $validation =  \Config\Services::validation();
            $validation->setRules([
                'id_prodi' => 'required',
                'kode_prodi' => 'required',
                'nama_program_studi' => 'required',
                'status_prodi' => 'required',
                'jenjang_pendidikan' => 'required',
                'periode_pelaporan' => 'required',
                'tipe_periode' => 'required',
            ]);
            $isDataValid = $validation->withRequest($this->request)->run();

            // jika data valid, simpan ke database
            if($isDataValid){
                $periode = new DBperiode();
                $periode->insert([
                    "id_prodi" => $this->request->getPost('id_prodi'),
                    "kode_prodi" => $this->request->getPost('kode_prodi'),
                    "nama_program_studi" => $this->request->getPost('nama_program_studi'),
                    "status_prodi" => $this->request->getPost('status_prodi'),
                    "jenjang_pendidikan" => $this->request->getPost('jenjang_pendidikan'),
                    "periode_pelaporan" => $this->request->getPost('periode_pelaporan'),
                    "tipe_periode" => $this->request->getPost('tipe_periode'),
                ]);
                return redirect()->to('table/periode');
            }
        
		
        // tampilkan form create
        echo view('periode');
    }

	public function edit($no)
{
    $periode = new DBperiode();
    $data['periode'] = $periode->find($no);

    // Validasi data yang diubah
    $validation =  \Config\Services::validation();
    $validation->setRules([
        'id_prodi' => 'required',
        'kode_prodi' => 'required',
        'nama_program_studi' => 'required',
        'status_prodi' => 'required',
        'jenjang_pendidikan' => 'required',
        'periode_pelaporan' => 'required',
        'tipe_periode' => 'required',
    ]);
    $isDataValid = $validation->withRequest($this->request)->run();

    if ($isDataValid) {
        // Jika data valid, lakukan update
        $periode->update($no, [
            "id_prodi" => $this->request->getPost('id_prodi'),
            "kode_prodi" => $this->request->getPost('kode_prodi'),
            "nama_program_studi" => $this->request->getPost('nama_program_studi'),
            "status_prodi" => $this->request->getPost('status_prodi'),
            "jenjang_pendidikan" => $this->request->getPost('jenjang_pendidikan'),
            "periode_pelaporan" => $this->request->getPost('periode_pelaporan'),
            "tipe_periode" => $this->request->getPost('tipe_periode'),
        ]);

        // Redirect ke halaman table5b
        return redirect()->to('table/periode');
    }

    //terakhir sampai sini

    // Tampilkan form edit
    return view('editperiode', $data);
}


		public function delete($no){
        $periode = new DBperiode();
        $periode->delete($no);
        return redirect('table/periode');
    }

    public function cari()
    {
        $periode = new DBperiode();
        $cariData = $this->request->getGet('search');

        $data['periode'] = $periode->cariData($cariData);

        return view('periode', $data);
    }


}