<?php

namespace App\Models\Alghi;

use App\Models\BaseModel;

class Mahasiswa extends BaseModel
{
    protected $table              = 'list_mahasiswa';
    protected $primaryKey         = 'id_mahasiswa';
    protected $returnType         = 'array';
    public $useTimestamps         = false;
    protected $validationMessages = [];
    protected $skipValidation     = false;
    protected $allowedFields      = [
        'nama_mahasiswa', 'jenis_kelamin', 'tanggal_lahir', 'id_perguruan_tinggi', 'nipd', 'ipk', 'total_sks', 'id_sms',
        'id_mahasiswa', 'id_agama', 'nama_agama', 'id_prodi', 'nama_program_studi', 'id_status_mahasiswa', 'nama_status_mahasiswa',
        'nim', 'id_periode', 'nama_periode_masuk', 'id_registrasi_mahasiswa', 'id_periode_keluar', 'tanggal_keluar', 'last_update',
        'tgl_create', 'status_sync'
    ];

    protected function generateIdBeforeInsert(array $data) {
        foreach ($data['data'] as $key => $value) {
            if (strpos($key, 'id_') === 0 && empty($value)) {
                $data['data'][$key] = $this->generateRandomCode();
            }
        }

        return $data;
    }
}
