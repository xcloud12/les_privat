<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Pengajuan extends Model
{
    protected $table         = 'pengajuan_mengajar';
    protected $primaryKey    = 'id_pengajuan';
    protected $returnType    = 'array';
    protected $allowedFields = [
        'id_tentor',
        'id_les',
        'hari',
        'aktif',
        'kode',
        'jam_kerja',
        'deskripsi'
    ];

    public function create($data)
    {
        # code...
    }

    public function allPengajuan()
    {
        $db = \Config\Database::connect();

        $les = $db->table('pengajuan_mengajar');
        $result = $les->select('id_pengajuan, kode, les.nama as les, user.nama as tentor, aktif, hari, jam_kerja, pengajuan_mengajar.deskripsi as deskripsi')
            ->join('les', 'les.id_les = pengajuan_mengajar.id_les')
            ->join('user', 'user.id_user = pengajuan_mengajar.id_tentor')
            ->get();

        return $result->getResult();
    }
}
