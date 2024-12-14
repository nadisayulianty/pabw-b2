<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Helpers\IdHelper;

class BiodataMahasiswa extends Model
{
    protected $table            = 'biodatamahasiswa';
    protected $primaryKey       = 'id_mahasiswa';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;

    protected $allowedFields = ['id_mahasiswa', 'nama_mahasiswa', 'tempat_lahir', 'tanggal_lahir', 'jalan', 'kelurahan', 'handphone', 'email'];

    // Validation rules
    protected $validationRules = [
        'nama_mahasiswa'        => 'required|max_length[255]',
        'tempat_lahir' => 'required|max_length[255]',
        'jalan' => 'required|max_length[255]',
        'kelurahan' => 'required|max_length[255]',
        'handphone' => 'required|max_length[255]',
        'email' => 'required|max_length[255]',
    ];

    // Validation messages
    protected $validationMessages = [
        'nama_mahasiswa' => [
            'required'   => 'Nama Mahasiswa is required.',
        ],
        'tempat_lahir' => [
            'required' => 'Tempat Lahir is required.',
        ],
        'jalan' => [
            'required' => 'Jalan is required.',
        ],
        'kelurahan' => [
            'required' => 'Kelurahan is required.',
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
