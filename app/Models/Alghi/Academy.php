<?php

namespace App\Models\Alghi;

use App\Models\BaseModel;

class Academy extends BaseModel
{
    protected $table              = 'nilai_transfer_pendidikan_mhs';
    protected $primaryKey         = 'id_transfer';
    protected $returnType         = 'array';
    public $useTimestamps         = false;
    protected $validationMessages = [];
    protected $skipValidation     = true;
    protected $allowedFields = [
        "id_transfer",
        "id_registrasi_mhs",
        "NIM",
        "nama_mahasiswa",
        "id_prodi",
        "nama_program_studi",
        "id_periode_masuk",
        "kode_mata_kuliah_asal",
        "nama_mata_kuliah_asal",
        "sks_mata_kuliah_asal",
        "nilai_huruf_asal",
        "id_matkul",
        "kode_matkul_diakui",
        "nama_mata_kuliah_diakui",
        "sks_mata_kuliah_diakui",
        "nilai_huruf_diakui",
        "nilai_angka_diakui",
        "id_perguruan_tinggi",
        "id_aktivitas",
        "judul",
        "id_jenis_aktivitas",
        "nama_jenis_aktivitas",
        "id_semester",
        "nama_semester",
        "status_sync",
    ];
}
