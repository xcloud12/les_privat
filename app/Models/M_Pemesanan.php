<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Pemesanan extends Model
{
    protected $table         = 'pemesanan_les';
    protected $primaryKey    = 'id_pemesanan';
    protected $returnType    = 'array';
    protected $allowedFields = [
        'id_pengajuan',
        'id_peserta',
        'tgl_pesan',
        'diterima',
        'banyak_pertemuan'
    ];

    public function create($data)
    {
        # code...
    }
}