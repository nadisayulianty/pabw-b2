<?php

namespace App\Models;

use CodeIgniter\Model;

class DBlistdosen extends Model
{
    protected $table      = 'listdosen';
    protected $primaryKey = 'id_dosen';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_dosen', 'nama_dosen', 'nidn', 'nip', 'jenis_kelamin', 'id_agama', 'nama_agama', 'tanggal_lahir', 'id_status_aktif', 'nama_status_aktif'];

    public function cariData($cariData = null)
    {
        $builder = $this->db->table($this->table);

        if (!empty($cariData)) {

            $builder->like('search', $cariData);
        }

        return $builder->get()->getResultArray();
    }
}