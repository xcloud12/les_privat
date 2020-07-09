<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Pemesanan extends Model
{
    protected $table         = 'pemesanan';
    protected $primaryKey    = 'id_pemesanan';
    protected $returnType    = 'array';
    protected $allowedFields = ['id_user_peserta', 'id_jadwal_tentor'];

    public function create($data)
    {
        # code...
    }
}
