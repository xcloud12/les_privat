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
        $result = $jadwal->select('id_jadwal, les.nama as les, ' .
            '(select nama from user where user.id_user = jadwal.id_peserta) as peserta,' .
            '(select alamat from user where user.id_user = jadwal.id_peserta) as alamat,' .
            '(select foto from user where user.id_user = jadwal.id_peserta) as foto_peserta,' .
            ' tgl, jam, absen, rating')
            ->join('les', 'les.id_les = jadwal.id_les')
            ->join('user', 'user.id_user = jadwal.id_tentor')
            ->where('user.username', $username)
            ->orderBy('jadwal.tgl')
            ->where('jadwal.tgl >= current_date')
            ->get();

        return $result->getResultArray();
    }
    public function pesertaJadwal($username)
    {
        $db = \Config\Database::connect();

        $jadwal = $db->table('jadwal');
        $result = $jadwal->select('id_jadwal, les.nama as les, ' .
            '(select nama from user where user.id_user = jadwal.id_tentor) as tentor,' .
            '(select alamat from user where user.id_user = jadwal.id_tentor) as alamat,' .
            '(select foto from user where user.id_user = jadwal.id_tentor) as foto_tentor,' .
            ' tgl, jam, absen, rating')
            ->join('les', 'les.id_les = jadwal.id_les')
            ->join('user', 'user.id_user = jadwal.id_peserta')
            ->where('user.username', $username)
            ->orderby('jadwal.tgl')
            ->where('jadwal.tgl >= current_date')
            ->get();

        return $result->getResultArray();
    }

    public function listJadwal()
    {
        $db = \Config\Database::connect();

        $jadwal = $db->table('jadwal');
        $res = $jadwal->select('biaya_daftar, tgl, absen, rating, ulasan, les.nama as les, id_jadwal, (select nama from user where jadwal.id_tentor=user.id_user) as tentor, (select nama from user where jadwal.id_peserta=user.id_user) as peserta')
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
