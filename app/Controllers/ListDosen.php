<?php namespace App\Controllers;

use App\Models\DBlistdosen;
use CodeIgniter\Exceptions\Pageid_dosentFoundException;

class ListDosen extends BaseController
{
	public function index()
	{
		$list_dosen = new DBlistdosen();
        // $data['list_dosen'] = $list_dosen->findAll();

        $search = $this->request->getGet('search');
        if ($search) {
            $list_dosen->like('nama_dosen',$search);
        }

        $data['list_dosen'] = $list_dosen->paginate(5);
        $data['pager'] = $list_dosen->pager;
        $data['search']=$search;

		echo view('list_dosen', $data);
	}

	public function create()
    {
       // lakukan validasi
       $validation =  \Config\Services::validation();
       $validation->setRules(['id_dosen' => 'required']);
       $isDataValid = $validation->withRequest($this->request)->run();

         // jika data valid, simpan ke database
         if($isDataValid){
            $list_dosen = new DBlistdosen();
            $list_dosen->insert([
                "id_dosen" => $this->request->getPost('id_dosen'),
                "nama_dosen" => $this->request->getPost('nama_dosen'),
                "nidn" => $this->request->getPost('nidn'),
                "nip" => $this->request->getPost('nip'),
                "jenis_kelamin" => $this->request->getPost('jenis_kelamin'),
                "id_agama" => $this->request->getPost('id_agama'),
                "nama_agama" => $this->request->getPost('nama_agama'),
                "tanggal_lahir" => $this->request->getPost('tanggal_lahir'),
                "id_status_aktif" => $this->request->getPost('id_status_aktif'),
                "nama_status_aktif" => $this->request->getPost('nama_status_aktif'),
            ]);
            return redirect()->to('table/list_dosen');
        }
		
        // tampilkan form create
        echo view('list_dosen');
    }

	public function edit($id_dosen)
    {
    // Ambil data yang akan diedit
    $list_dosen = new DBlistdosen();
    $data['list_dosen'] = $list_dosen->where('id_dosen', $id_dosen)->first();

    // Validasi data yang diubah
    $validation =  \Config\Services::validation();
    $validation->setRules([
        'id_dosen' => 'required',
        // Tambahkan aturan validasi untuk field lainnya jika diperlukan
    ]);
    $isDataValid = $validation->withRequest($this->request)->run();

    if ($isDataValid) {
        // Jika data valid, lakukan update
        $list_dosen->update($id_dosen, [
                "id_dosen" => $this->request->getPost('id_dosen'),
                "nama_dosen" => $this->request->getPost('nama_dosen'),
                "nidn" => $this->request->getPost('nidn'),
                "nip" => $this->request->getPost('nip'),
                "jenis_kelamin" => $this->request->getPost('jenis_kelamin'),
                "id_agama" => $this->request->getPost('id_agama'),
                "nama_agama" => $this->request->getPost('nama_agama'),
                "tanggal_lahir" => $this->request->getPost('tanggal_lahir'),
                "id_status_aktif" => $this->request->getPost('id_status_aktif'),
                "nama_status_aktif" => $this->request->getPost('nama_status_aktif'),
            
        ]);

        // Redirect ke halaman table5a
        return redirect()->to('table/list_dosen');
    }

    // Tampilkan form edit
    return view('edittablelist_dosen', $data);
}


		public function delete($id_dosen)
    {
        $list_dosen = new DBlistdosen();
        $list_dosen->delete($id_dosen);
        return redirect('table/list_dosen');
    }

    public function cari()
    {
        $list_dosen = new DBlistdosen();
        $cariData = $this->request->getGet('search');

        $data['list_dosen'] = $list_dosen->cariData($cariData);

        return view('list_dosen', $data);
    }


}