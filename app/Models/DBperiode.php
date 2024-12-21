<?php

namespace App\Models;

use CodeIgniter\Model;

class DBperiode extends Model
{
    protected $table = 'periode';
    protected $primaryKey = 'no';
    protected $allowedFields = ['id_prodi', 'kode_prodi' , 'nama_program_studi','status_prodi','jenjang_pendidikan','periode_pelaporan','tipe_periode'];
}