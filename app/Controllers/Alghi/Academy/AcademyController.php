<?php namespace App\Controllers\Alghi\Academy;

use App\Controllers\Alghi\EnvironmentController;
use App\Models\Alghi\Academy;
use App\Models\Alghi\Mahasiswa;

class AcademyController extends EnvironmentController
{
    public function __construct() {
        parent::__construct(Academy::class);
    }

    public function index() {
        $datas = static::$__model->paginate(5);
        return view("alghi/academyManagement/index",[
            "datas" => $datas,
            "pager" => static::$__model->pager,
        ]);
    }

    public function store() {
        if($this->request->getPost("is_edit")) static::$__model->where("id_transfer",$this->request->getPost("id_transfer"))->first();

        return (static::$__model->save($this->request->getPost()))
                 ? redirect()->to('/table/Academy')->with('success', 'Data Mahasiswa berhasil disimpan!')
                 : redirect()->back()->withInput()->with('error', 'Gagal menyimpan data mahasiswa');
    }

    public function edit($id) {
        return view("alghi/academyManagement/edit",[
            "data" => static::$__model->where("id_transfer",$id)->first()
        ]);
    }

    public function delete($id) {
        static::$__model->where("id_transfer",$id)->delete();
        return redirect()->to('/table/Academy')->with('success', 'Data berhasil dihapus.');
    }

}