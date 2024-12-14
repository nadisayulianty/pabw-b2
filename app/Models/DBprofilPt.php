<?php

namespace App\Models;

use CodeIgniter\Model;

class DBprofilPt extends Model
{
    protected $table      = 'profilpt';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_perguruan_tinggi', 'telepon', 'faximile', 'email', 'website', 'jalan', 'dusun', 'rt_rw', 'kelurahan', 'kode_pos'];

    public function cariData($cariData = null)
    {
        $builder = $this->db->table($this->table);

        if (!empty($cariData)) {

            $builder->like('search', $cariData);
        }

        return $builder->get()->getResultArray();
    }
}
