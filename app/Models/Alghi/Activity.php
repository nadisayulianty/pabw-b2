<?php

namespace App\Models\Alghi;

use App\Models\BaseModel;

class Activity extends BaseModel
{
    protected $table              = 'list_aktivitas_mahasiswa';
    protected $primaryKey         = 'id_aktivitas';
    protected $returnType         = 'array';
    public $useTimestamps         = false;
    protected $validationMessages = [];
    protected $skipValidation     = true;
    protected $allowedFields = [
        'nm_asaldata','asal_data','id_aktivitas','program_mbkm','nama_program_mbkm','jenis_anggota','nama_jenis_anggota','id_jenis_aktivitas',
        'nama_jenis_aktivitas','id_prodi','nama_prodi','id_semester','nama_semester','judul','keterangan','lokasi','sk_tugas','sumber_data',
        'tanggal_sk_tugas','tanggal_mulai','tanggal_selesai','untuk_kampus_merdeka'
    ];
}
