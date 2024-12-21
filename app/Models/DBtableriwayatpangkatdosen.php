<?php

namespace App\Models;

use CodeIgniter\Model;

class DBtableriwayatpangkatdosen extends Model
{
    protected $table      = 'riwayatpangkatdosen';
    protected $primaryKey = 'id_dosen';

    protected $useAutoIncrement = true;
    protected $allowedFields = [
    'id_dosen',
    'nidn',
    'nama_dosen',
    'id_pangkat_golongan',
    'nama_pangkat_golongan',
    'sk_pangkat',
    'tanggal_sk_pangkat',
    'mulai_sk_pangkat',
    'masa_kerja_dalam_tahun',
    'masa_kerja_dalam_bulan' ];

    public function cariData($cariData = null)
    {
        $builder = $this->db->table($this->table);

        if (!empty($cariData)) {

            $builder->like('search', $cariData);
        }

        return $builder->get()->getResultArray();
    }
}
