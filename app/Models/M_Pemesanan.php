<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Pemesanan extends Model
{
    protected $table         = 'pemesanan_les';
    protected $primaryKey    = 'id_pemesanan';
    protected $returnType    = 'object';
    protected $allowedFields = [
        'id_pengajuan',
        'id_peserta',
        'tgl_pesan',
        'hari',
        'diterima',
        'banyak_pertemuan',
        'deskripsi'
    ];

    public function create($data)
    {
        # code...
    }

    public function pemesananku($user_id)
    {
        $db        = \Config\Database::connect();
        $pemesanan = $db->table('pemesanan_les');

        $result = $pemesanan->select('id_pemesanan, id_peserta, user.nama AS tentor, pemesanan_les.hari as hari, tgl_pesan, diterima, banyak_pertemuan, jam_kerja, les.nama as les, les.kategori as kategori, pengajuan_mengajar.deskripsi as deskripsi_tentor, pemesanan_les.deskripsi as deskripsi_pesan, foto as tentor_foto')
            ->join('pengajuan_mengajar', 'pemesanan_les.id_pengajuan = pengajuan_mengajar.id_pengajuan')
            ->join('user', 'user.id_user = pengajuan_mengajar.id_tentor')
            ->join('les', 'les.id_les = pengajuan_mengajar.id_les')
            ->where('id_peserta', $user_id)
            ->get();

        return $result->getResultObject();
    }

    public function is_aktif($id_pesanan)
    {
        $db        = \Config\Database::connect();
        $pemesanan = $db->table('pemesanan_les');

        return $pemesanan->select('id_pemesanan, diterima')->where('id_pemesanan', esc($id_pesanan))->get()->getResultObject();
    }

    public function getDetail($id_pemesanan)
    {
        $db        = \Config\Database::connect();
        $pemesanan = $db->table('pemesanan_les');

        $result = $pemesanan->select('id_tentor, id_les, id_peserta, id_pemesanan, tgl_pesan, pemesanan_les.hari as hari, banyak_pertemuan')
            ->join('pengajuan_mengajar', 'pengajuan_mengajar.id_pengajuan = pemesanan_les.id_pengajuan')
            ->where('id_pemesanan', $id_pemesanan)
            ->get();

        return $result->getResultObject()[0];
    }
}
