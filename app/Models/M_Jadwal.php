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
        'jam',
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
            ' tgl, absen, rating')
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
        $result = $jadwal->select('id_jadwal, LES.nama AS les, ' .
            '(SELECT nama FROM USER WHERE USER.id_user = JADWAL.id_tentor) AS tentor,' .
            '(SELECT alamat FROM USER WHERE USER.id_user = JADWAL.id_tentor) AS alamat,' .
            '(SELECT foto FROM USER WHERE USER.id_user = JADWAL.id_tentor) AS foto_tentor,' .
            ' tgl, absen, rating')
            ->join('LES', 'LES.id_les = JADWAL.id_les')
            ->join('USER', 'USER.id_user = JADWAL.id_peserta')
            ->where('USER.username', $username)
            ->orderBy('jadwal.tgl')
            ->where('JADWAL.tgl >= CURRENT_DATE')
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

    public function myJadwalSummary($username)
    {
        $db = $this->builder();

        $jadwal = $db->select('les.nama as les, p.username, p.nama as peserta, t.nama as tentor, les.deskripsi')
            ->distinct('les.nama')
            ->join('les', 'les.id_les=jadwal.id_les')
            ->join('user as p', 'p.id_user=jadwal.id_peserta')
            ->join('user as t', 't.id_user=jadwal.id_tentor')
            ->where('p.username', esc($username))
            ->orderBy('les')
            ->get();

        return $jadwal->getResultObject();
    }

    public function myJadwal($username, $mapel)
    {
        $db = \Config\Database::connect();
        $db = $db->table('jadwal as j');
        $jadwal = $db->select('t.nama as tentor, l.nama as les, j.tgl, j.jam')
            // ->from('jadwal as j')
            ->join('les as l', 'l.id_les=j.id_les')
            ->join('user as t', 't.id_user=j.id_tentor')
            ->join('user as p', 'p.id_user=j.id_peserta')
            ->where('p.username', $username)
            ->where('l.nama', $mapel)
            ->where('j.tgl >= CURDATE()')
            ->orderBy('j.tgl', 'asc')
            ->get();

        return $jadwal->getResultObject();
    }
}
