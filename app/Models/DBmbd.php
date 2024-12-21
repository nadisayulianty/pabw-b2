<?php

namespace App\Models;

use CodeIgniter\Model;

class DBmbd extends Model
{
    protected $table = 'mahasiswa_bimbingan_dosen';
    protected $primaryKey = 'no';
    protected $allowedFields = ['nama_kategori_kegiatan','id_aktivitas','judul','id_bimbing_mahasiswa','id_kategori_kegiatan','id_dosen','nidn','nama_dosen','pembimbing_ke'];
}