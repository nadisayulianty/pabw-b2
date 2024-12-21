<?php

namespace App\Models;

use CodeIgniter\Model;

class DBtablelistanggotaaktivitasmahasiswa extends Model
{
    protected $table      = 'listanggotaaktivitasmahasiswa';
    protected $primaryKey = 'id_aktivitas';

    protected $useAutoIncrement = true;
    protected $allowedFields = [
    'id_aktivitas',
    'judul',
    'id_anggota',
    'id_registrasi_mahasiswa',
    'nim',
    'nama_mahasiswa',
    'jenis_peran',
    'nama_jenis_peran',
    'status_sync'];

    public function cariData($cariData = null)
    {
        $builder = $this->db->table($this->table);

        if (!empty($cariData)) {

            $builder->like('search', $cariData);
        }

        return $builder->get()->getResultArray();
    }
}
