<?php

namespace App\Models;

use CodeIgniter\Model;

class M_user extends Model
{
    protected $table         = 'user';
    protected $primaryKey    = 'id_user';
    protected $returnType    = 'array';
    protected $allowedFields = [
        'username',
        'password',
        'email',
        'nama',
        'level',
        'jk',
        'alamat',
        'telp',
        'tempat_lahir',
        'tgl_lahir',
        'foto',
        'gps'
    ];

    public function create($data)
    {
        # code...
    }
}