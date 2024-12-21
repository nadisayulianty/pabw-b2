<?php

namespace App\Models;

use CodeIgniter\Model;

class DBtableDetailKelasKuliah extends Model
{
    protected $table      = 'detail_kelas_kuliah';
    protected $primaryKey = 'id_kelas_kuliah';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_kelas_kuliah','nama_program_studi', 'nama_mata_kuliah', 'kapasitas', 'prodi_penyelenggara', 'perguruan_tinggi_penyelenggara', 'id_prodi', 'id_matkul', 'nama_semester', 'id_semester'];

    // public function cariData($cariData = null)
    // {
    //     $builder = $this->db->table($this->table);

    //     if (!empty($cariData)) {

    //         $builder->like('search', $cariData);
    //     }

    //     return $builder->get()->getResultArray();
    // }
}
