<?php

namespace App\Models;

use CodeIgniter\Database\BaseBuilder;
use CodeIgniter\Model;

class M_Jadwal extends Model
{
    protected $table         = 'jadwal';
    protected $primaryKey    = 'id_jadwal';
    protected $returnType    = 'array';
    protected $allowedFields = [
        'id_tentor',
        'id_les',
        'id_peserta',
        'tgl',
        'absen',
        'rating',
        'ulasan'
    ];

    public function create($data)
    {
        # code...
    }

    public function tentorJadwal($username)
    {
        $db = \Config\Database::connect();

        $jadwal = $db->table('jadwal');
        $result = $jadwal->select('id_jadwal, LES.nama AS les, ' .
            '(SELECT nama FROM USER WHERE USER.id_user = JADWAL.id_peserta) AS peserta,' .
            '(SELECT alamat FROM USER WHERE USER.id_user = JADWAL.id_peserta) AS alamat,' .
            '(SELECT foto FROM USER WHERE USER.id_user = JADWAL.id_peserta) AS foto_peserta,' .
            ' tgl, absen')
            ->join('LES', 'LES.id_les = JADWAL.id_les')
            ->join('USER', 'USER.id_user = JADWAL.id_tentor')
            ->where('USER.username', $username)
            ->orderBy('jadwal.tgl')
            ->where('JADWAL.tgl >= CURRENT_DATE')
            ->get();

        return $result->getResultArray();
    }
    public function pesertaJadwal($username)
    {
        $db = \Config\Database::connect();

        $jadwal = $db->table('jadwal');
        $result = $jadwal->select('id_jadwal, LES.nama AS les, USER.nama AS peserta,' .
            '(SELECT nama FROM USER WHERE USER.id_user = JADWAL.id_tentor) AS tentor,'
            . ' tgl, absen')
            ->join('LES', 'LES.id_les = JADWAL.id_les')
            ->join('USER', 'USER.id_user = JADWAL.id_peserta')
            ->get();

        return $result->getResultArray();
    }

    public function listJadwal()
    {
        $db = \Config\Database::connect();

        $jadwal = $db->table('jadwal');
        $res = $jadwal->select('tgl, absen, rating, ulasan, les.nama as les, id_jadwal, (SELECT nama FROM user where jadwal.id_tentor=user.id_user) as tentor, (SELECT nama FROM user where jadwal.id_peserta=user.id_user) as peserta')
            ->join('les', 'les.id_les = jadwal.id_les')
            ->get();

        return $res->getResult();
    }
}
