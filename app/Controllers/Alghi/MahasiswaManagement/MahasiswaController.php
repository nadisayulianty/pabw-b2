<?php namespace App\Controllers\Alghi\MahasiswaManagement;

use App\Controllers\Alghi\EnvironmentController;
use App\Models\Alghi\Mahasiswa;

class MahasiswaController extends EnvironmentController
{
    public function __construct() {
        parent::__construct(Mahasiswa::class);
    }

    public function index() {
        return view("alghi/mahasiswaManagement/index",[
            "datas" => static::$__model->findAll()
        ]);
    }

    public function store() {
        if (!$this->validate([
            'nama_mahasiswa' => 'required',
            'jenis_kelamin'  => 'required',
        ])) {
            return redirect()->back()->withInput()->with('error', 'Data tidak valid');
        }

        if($this->request->getPost("is_edit")) static::$__model->where("nim",$this->request->getPost("is_edit"))->first();

        return (static::$__model->save($this->request->getPost()))
                 ? redirect()->to('/table/mahasiswa')->with('success', 'Data Mahasiswa berhasil disimpan!')
                 : redirect()->back()->withInput()->with('error', 'Gagal menyimpan data mahasiswa');
    }

    public function edit($nim) {
        return view("alghi/mahasiswaManagement/edit",[
            "data" => static::$__model->where("nim",$nim)->first()
        ]);
    }

    public function delete($id) {
        static::$__model->where("nim",$id)->delete();
        return redirect()->to('/table/mahasiswa')->with('success', 'Data berhasil dihapus.');
    }

}