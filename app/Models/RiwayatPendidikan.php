<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Helpers\IdHelper;

class RiwayatPendidikan extends Model
{
    protected $table            = 'listriwayatpendidikanmahasiswa';
    protected $primaryKey       = 'id_mahasiswa';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields = ['id_mahasiswa', 'nama_mahasiswa', 'nim', 'nama_jenis_daftar', 'keterangan_keluar', 'nama_perguruan_tinggi', 'nama_program_studi'];

    // Validation rules
    protected $validationRules = [
        'nama_mahasiswa'        => 'required|max_length[255]',
        'nim' => 'required|max_length[255]',
        'nama_jenis_daftar' => 'required|max_length[255]',
        'keterangan_keluar' => 'required|max_length[255]',
        'nama_perguruan_tinggi' => 'required|max_length[255]',
        'nama_program_studi' => 'required|max_length[255]',
    ];

    // Validation messages
    protected $validationMessages = [
        'nama_mahasiswa' => [
            'required'   => 'Nama Mahasiswa is required.',
        ],
        'nim' => [
            'required' => 'NIM Lahir is required.',
        ],
        'nama_jenis_daftar' => [
            'required' => 'Jalan is required.',
        ],
        'keterangan_keluar' => [
            'required' => 'Kelurahan is required.',
        ],
        'nama_perguruan_tinggi' => [
            'required' => 'nama_perguruan_tinggi is required.',
        ],
        'nama_program_studi' => [
            'required' => 'Nama Program Studi is required.',
        ],
    ];

    public function generateIdMahasiswa()
    {
        return IdHelper::generateUniqueId();
    }
}
