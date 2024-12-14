<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Helpers\IdHelper;


class DataLengkap extends Model
{
    protected $table            = 'datalengkapmahasiswaprodi';
    protected $primaryKey       = 'id_mahasiswa';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;

    protected $allowedFields = ['id_mahasiswa', 'nama_mahasiswa', 'nama_program_studi', 'nama_periode_masuk', 'nama_jalur_masuk', 'handphone', 'email'];

    // Validation rules
    protected $validationRules = [
        'nama_mahasiswa'        => 'required|max_length[255]',
        'nama_program_studi' => 'required|max_length[255]',
        'nama_periode_masuk' => 'required|max_length[255]',
        'nama_jalur_masuk' => 'required|max_length[255]',
        'handphone' => 'required|max_length[255]',
        'email' => 'required|max_length[255]',
    ];

    // Validation messages
    protected $validationMessages = [
        'nama_mahasiswa' => [
            'required'   => 'Nama Mahasiswa is required.',
        ],
        'nama_program_studi' => [
            'required' => 'Nama Program Studi is required.',
        ],
        'nama_periode_masuk' => [
            'required' => 'Tahun periode masuk is required.',
        ],
        'nama_jalur_masuk' => [
            'required' => 'Nama Jalur masuk is required.',
        ],
        'handphone' => [
            'required' => 'Handphone is required.',
        ],
        'email' => [
            'required' => 'Email is required.',
        ],
    ];

    public function generateIdMahasiswa()
    {
        return IdHelper::generateUniqueId();
    }
}
