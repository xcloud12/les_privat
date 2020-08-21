<?php

namespace App\Models;

use CodeIgniter\Model;

class M_User extends Model
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

    public function getIdFromUsername($username)
    {
        $db   = \Config\Database::connect();
        $user = $db->table('user');
        return $user->select('id_user')->where('username', $username)->get()->getResultObject()[0]->id_user;
    }

    public function getEmail($username)
    {
        $db   = \Config\Database::connect();
        $user = $db->table('user');
        return $user->select('email')->where('username', $username)->get()->getResultObject()[0]->id_user;
    }
}
