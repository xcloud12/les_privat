<?php

namespace App\Models;

use CodeIgniter\Model;

class M_user extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['username', 'email', 'nama', 'password', 'level','tempat_lahir','jenis_kelamin'];

    public function create($data )
    {
        # code...
    }
}
