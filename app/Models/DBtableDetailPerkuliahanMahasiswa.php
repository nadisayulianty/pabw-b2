<?php

namespace App\Models;

use CodeIgniter\Model;

class DBtableDetailPerkuliahanMahasiswa extends Model
{
    protected $table      = 'detail_perkuliahan_mahasiswa';
    protected $primaryKey = 'id_registrasi_mahasiswa';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_registrasi_mahasiswa','nama_program_studi', 'angkatan', 'nim', 'nama_mahasiswa', 'ips', 'ipk', 'sks_semester', 'sks_total', 'nama_status_mahasiswa', 'id_status_mahasiswa', 'id_prodi', 'id_semester', 'nama_semester'];
}
