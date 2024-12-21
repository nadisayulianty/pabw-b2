<?php

namespace App\Models;

use CodeIgniter\Model;

class DBtableriwayatsertifikasidosen extends Model
{
    protected $table      = 'riwayatsertifikasidosen';
    protected $primaryKey = 'id_dosen';

    protected $useAutoIncrement = true;
    protected $allowedFields = [
    'id_dosen',
    'nidn',
    'nama_dosen',
    'nomor_peserta',
    'id_bidang_studi',
    'nama_bidang_studi',
    'id_jenis_sertifikasi',
    'nama_jenis_sertifikasi',
    'tahun_sertifikasi',
    'sk_sertifikasi' ];

    public function cariData($cariData = null)
    {
        $builder = $this->db->table($this->table);

        if (!empty($cariData)) {

            $builder->like('search', $cariData);
        }

        return $builder->get()->getResultArray();
    }
}
