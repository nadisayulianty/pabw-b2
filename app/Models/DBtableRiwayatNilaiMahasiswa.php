<?php

namespace App\Models;

use CodeIgniter\Model;

class DBtableRiwayatNilaiMahasiswa extends Model
{
    protected $table      = 'riwayat_nilai_mahasiswa';
    protected $primaryKey = 'id_registrasi_mahasiswa';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_registrasi_mahasiswa','nama_program_studi', 'nama_mata_kuliah', 'nim', 'nama_mahasiswa', 'nama_kelas_kuliah', 'sks_mata_kuliah', 'nilai_angka', 'angkatan', 'nilai_huruf', 'id_prodi', 'id_matkul', 'id_kelas'];
}
