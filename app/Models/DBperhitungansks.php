<?php

namespace App\Models;

use CodeIgniter\Model;

class DBperhitungansks extends Model
{
    protected $table      = 'perhitungan_sks';
    protected $primaryKey = 'id_dosen';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_kelas_kuliah', 'id_registrasi_dosen', 'id_dosen','nidn','nama_dosen', 'nama_kelas_kuliah', 'id_substansi', 'nama_substansi', 'rencana_minggu_pertemuan', 'perhitungan_sks'];

    public function cariData($cariData = null)
    {
        $builder = $this->db->table($this->table);

        if (!empty($cariData)) {

            $builder->like('search', $cariData);
        }

        return $builder->get()->getResultArray();
    }
}