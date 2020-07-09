<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Les extends Model
{
    protected $table         = 'les';
    protected $primaryKey    = 'id_les';
    protected $returnType    = 'array';
    protected $allowedFields = ['kategori', 'nama_mapel', 'harga', 'bonus'];

    public function create($data)
    {
        # code...
    }
}
