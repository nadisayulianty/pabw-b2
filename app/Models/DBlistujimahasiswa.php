<?php

namespace App\Models;

use CodeIgniter\Model;

class DBlistujimahasiswa extends Model
{
    protected $table      = 'listujimahasiswa';
    protected $primaryKey = 'id_dosen';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_aktivitas', 'judul', 'id_uji','id_kategori_kegiatan','nama_kategori_kegiatan', 'id_dosen', 'nidn', 'nama_dosen', 'penguji_ke', 'status_sync'];

    public function cariData($cariData = null)
    {
        $builder = $this->db->table($this->table);

        if (!empty($cariData)) {

            $builder->like('search', $cariData);
        }

        return $builder->get()->getResultArray();
    }
}