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
        'hari',
        'diterima',
        'banyak_pertemuan',
        'deskripsi'
    ];

    public function create($data)
    {
        # code...
    }
}