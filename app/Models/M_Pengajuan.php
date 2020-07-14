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
        'hari',
        'aktif',
        'kode',
        'jam_kerja'
    ];

    public function create($data)
    {
        # code...
    }
}