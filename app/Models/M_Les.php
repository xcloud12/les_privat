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
        'biaya_daftar',
        'deskripsi'
    ];
    protected $validationRules    = [
        'nama'     => 'required',
        'kategori' => 'required',
        'harga'    => 'required|numeric',
    ];

    public function create($data)
    {
        # code...
    }
}