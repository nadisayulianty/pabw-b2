<?php

namespace App\Models;

use CodeIgniter\Model;

class DBtableListNilaiPerkuliahanKelas extends Model
{
    protected $table      = 'listnilaiperkuliahankelas';
    protected $primaryKey = 'id_matkul';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_mata_kuliah', 'id_matkul', 'nama_kelas_kuliah', 'sks_mata_kuliah', 'jumlah_mahasiswa_krs', 'nama_prodi'];

    public function cariData($cariData = null)
    {
        $builder = $this->db->table($this->table);

        if (!empty($cariData)) {

            $builder->like('search', $cariData);
        }

        return $builder->get()->getResultArray();
    }
}
