<?php

namespace App\Models\Rasyad;

use CodeIgniter\Model;

class ListAktivitasMahasiswa extends Model
{
    protected $table            = 'list_aktivitas_mahasiswa';
    protected $primaryKey       = 'id_aktivitas';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nm_asaldata',
        'asal_data',
        'id_aktivitas',
        'program_mbkm',
        'nama_program_mbkm',
        'jenis_anggota',
        'nama_jenis_anggota',
        'id_jenis_aktivitas',
        'nama_jenis_aktivitas',
        'id_prodi',
        'nama_prodi',
        'id_semester',
        'nama_semester',
        'judul',
        'keterangan',
        'lokasi',
        'sk_tugas',
        'sumber_data',
        'tanggal_sk_tugas',
        'tanggal_mulai',
        'tanggal_selesai',
        'untuk_kampus_merdeka',
        'status_sync'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getNewId()
    {
        $this->select('MAX(id_aktivitas) as id_aktivitas');
        $result = $this->first();
        return $result['id_aktivitas'] + 1;
    }
}
