<?php

namespace App\Models;

use CodeIgniter\Model;

class DBrfd extends Model
{
    protected $table = 'riwayat_fungsional_dosen';
    protected $primaryKey = 'no';
    protected $allowedFields = ['id_dosen', 'nidn', 'nama_dosen', 'id_jabatan_fungsional', 'nama_jabatan_fungsional', 'sk_jabatan_fungsional', 'mulai_sk_jabatan'];
}