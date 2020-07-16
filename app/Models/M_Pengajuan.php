<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Pengajuan extends Model
{
    protected $table         = 'pengajuan_mengajar';
    protected $primaryKey    = 'id_pengajuan';
    protected $returnType    = 'array';
    protected $allowedFields = [
        'id_tentor',
        'id_les',
        'hari',
        'aktif',
        'kode',
        'jam_kerja',
        'deskripsi'
    ];

    public function create($data)
    {
        # code...
    }
}