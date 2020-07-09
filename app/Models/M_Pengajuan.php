<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Pengajuan extends Model
{
    protected $table         = 'jadwal_tentor';
    protected $primaryKey    = 'id_jadwal_tentor';
    protected $returnType    = 'array';
    protected $allowedFields = ['id_user_tentor', 'id_les', 'hari_aktif', 'aktif', 'no_ujian', 'nilai_ujian'];

    public function create($data)
    {
        # code...
    }
}
