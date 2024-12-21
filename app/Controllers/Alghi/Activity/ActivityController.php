<?php namespace App\Controllers\Alghi\Activity;


use App\Controllers\Alghi\EnvironmentController;
use App\Models\Alghi\Activity;
use CodeIgniter\Exceptions\PageNotFoundException;

class ActivityController extends EnvironmentController
{
    public function __construct() {
        parent::__construct(Activity::class);
    }

    public function index() {
        $datas = static::$__model->paginate(10);
        return view("alghi/activityManagement/index",[
            "datas" => $datas,
            "pager" => static::$__model->pager,
        ]);
    }

    public function store() {
        try {
            if($this->request->getPost('is_edit')) {
                $model = static::$__model->where("id_aktivitas", $this->request->getPost('is_edit'))->first();
                if ($model) {
                    $model->update($this->request->getPost('is_edit'),[
                        'nm_asaldata'          => $this->request->getPost('nm_asaldata')  ?? $model->nm_asaldata,
                        'asal_data'            => $this->request->getPost('asal_data')  ?? $model->asal_data,
                        'id_aktivitas'         => $this->request->getPost('id_aktivitas')  ?? $model->id_aktivitas,
                        'program_mbkm'         => $this->request->getPost('program_mbkm')  ?? $model->program_mbkm,
                        'nama_program_mbkm'    => $this->request->getPost('nama_program_mbkm')  ?? $model->nama_program_mbkm,
                        'jenis_anggota'        => $this->request->getPost('jenis_anggota')  ?? $model->jenis_anggota,
                        'nama_jenis_anggota'   => $this->request->getPost('nama_jenis_anggota')  ?? $model->nama_jenis_anggota,
                        'id_jenis_aktivitas'   => $this->request->getPost('id_jenis_aktivitas')  ?? $model->id_jenis_aktivitas,
                        'nama_jenis_aktivitas' => $this->request->getPost('nama_jenis_aktivitas')  ?? $model->nama_jenis_aktivitas,
                        'id_prodi'             => $this->request->getPost('id_prodi')  ?? $model->id_prodi,
                        'nama_prodi'           => $this->request->getPost('nama_prodi')  ?? $model->nama_prodi,
                        'id_semester'          => $this->request->getPost('id_semester')  ?? $model->id_semester,
                        'nama_semester'        => $this->request->getPost('nama_semester')  ?? $model->nama_semester,
                        'judul'                => $this->request->getPost('judul')  ?? $model->judul,
                        'keterangan'           => $this->request->getPost('keterangan')  ?? $model->keterangan,
                        'lokasi'               => $this->request->getPost('lokasi')  ?? $model->lokasi,
                        'sk_tugas'             => $this->request->getPost('sk_tugas')  ?? $model->sk_tugas,
                        'sumber_data'          => $this->request->getPost('sumber_data')  ?? $model->sumber_data,
                        'tanggal_sk_tugas'     => $this->request->getPost('tanggal_sk_tugas')  ?? $model->tanggal_sk_tugas,
                        'tanggal_mulai'        => $this->request->getPost('tanggal_mulai')  ?? $model->tanggal_mulai,
                        'tanggal_selesai'      => $this->request->getPost('tanggal_selesai')  ?? $model->tanggal_selesai,
                        'untuk_kampus_merdeka' => $this->request->getPost('untuk_kampus_merdeka')  ?? $model->untuk_kampus_merdeka,
                    ]);
                } else {
                    throw new \Exception("Data with id_aktivitas not found.");
                }
            }else {

                static::$__model->insert([
                    'nm_asaldata'          => $this->request->getPost('nm_asaldata')  ?? "invalid",
                    'asal_data'            => $this->request->getPost('asal_data')  ?? "invalid",
                    'id_aktivitas'         => $this->request->getPost('id_aktivitas')  ?? "invalid",
                    'program_mbkm'         => $this->request->getPost('program_mbkm')  ?? "invalid",
                    'nama_program_mbkm'    => $this->request->getPost('nama_program_mbkm')  ?? "invalid",
                    'jenis_anggota'        => $this->request->getPost('jenis_anggota')  ?? "invalid",
                    'nama_jenis_anggota'   => $this->request->getPost('nama_jenis_anggota')  ?? "invalid",
                    'id_jenis_aktivitas'   => $this->request->getPost('id_jenis_aktivitas')  ?? "invalid",
                    'nama_jenis_aktivitas' => $this->request->getPost('nama_jenis_aktivitas')  ?? "invalid",
                    'id_prodi'             => $this->request->getPost('id_prodi')  ?? "invalid",
                    'nama_prodi'           => $this->request->getPost('nama_prodi')  ?? "invalid",
                    'id_semester'          => $this->request->getPost('id_semester')  ?? "invalid",
                    'nama_semester'        => $this->request->getPost('nama_semester')  ?? "invalid",
                    'judul'                => $this->request->getPost('judul')  ?? "invalid",
                    'keterangan'           => $this->request->getPost('keterangan')  ?? "invalid",
                    'lokasi'               => $this->request->getPost('lokasi')  ?? "invalid",
                    'sk_tugas'             => $this->request->getPost('sk_tugas')  ?? "invalid",
                    'sumber_data'          => $this->request->getPost('sumber_data')  ?? "invalid",
                    'tanggal_sk_tugas'     => $this->request->getPost('tanggal_sk_tugas')  ?? "invalid",
                    'tanggal_mulai'        => $this->request->getPost('tanggal_mulai')  ?? "invalid",
                    'tanggal_selesai'      => $this->request->getPost('tanggal_selesai')  ?? "invalid",
                    'untuk_kampus_merdeka' => $this->request->getPost('untuk_kampus_merdeka')  ?? "invalid",
                ]);
            }

    } catch (\Exception $e) {
        // Dump error message for debugging
        return "An error occurred: " . $e->getMessage();
        // Optionally, you can log the error
        log_message('error', $e->getMessage());
    }




        return redirect()->to('/table/activity')->with('success', 'Data Mahasiswa berhasil disimpan!');
    }

    public function edit($nim) {
        return view("alghi/activityManagement/edit",[
            "data" => static::$__model->where("id_aktivitas",$nim)->first()
        ]);
    }

    public function delete($id) {
        static::$__model->where("id_aktivitas",$id)->delete();
        return redirect()->to('/table/activity')->with('success', 'Data berhasil dihapus.');
    }
}