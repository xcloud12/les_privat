<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Les extends Model
{
    protected $table         = 'les';
    protected $primaryKey    = 'id_les';
    protected $returnType    = 'array';
    protected $allowedFields = [
        'nama',
        'kategori',
        'harga',
        'deskripsi'
    ];

    public function create($data)
    {
        # code...
    }
}
