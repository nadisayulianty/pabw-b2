<?php

namespace App\Models;

use CodeIgniter\Model;

class DBlistMataKuliah extends Model
{
    protected $table      = 'list_mata_kuliah';
    protected $primaryKey = 'id_matkul';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_matkul', 'kode_mata_kuliah', 'nama_mata_kuliah', 'sks_mata_kuliah', 'nama_program_studi'];

    public function cariData($cariData = null)
    {
        $builder = $this->db->table($this->table);

        if (!empty($cariData)) {

            $builder->like('search', $cariData);
        }

        return $builder->get()->getResultArray();
    }
}
