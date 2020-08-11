<?php

namespace App\Controllers;

use App\Models\M_Pemesanan;
use App\Models\M_Pengajuan;
use CodeIgniter\I18n\Time;

class Peserta extends User
{
    public function kelas()
    {
        helper('number');
        $sesi      = session();
        $pengajuan = new M_Pengajuan();
        $pemesanan = new M_Pemesanan();

        $data = [
            'title'      => 'Kelas',
            'pemesanan'  => $pemesanan->pemesananku($sesi->id_user),
            'daftar_les' => $pengajuan->pengajuanAktif(),
        ];

        echo view('templates/header', $data);
        echo view($this->getsidebar(), $data);
        echo view('user/data/peserta/pemesanan', $data);
        echo view('templates/footer');
    }

    public function ikut_kelas($id_pengajuan)
    {
        $sesi  = session();
        $model = new  M_Pemesanan();
        $tgl   = new Time('now');

        $data = [
            'id_pengajuan'     => $id_pengajuan,
            'id_peserta'       => $sesi->id_user,
            'tgl_pesan'        => $tgl->toDateString(),
            'banyak_pertemuan' => $this->request->getVar('banyak_pertemuan'),
            'hari'             => $this->request->getVar('hari_mengajar'),
            'deskripsi'        => $this->request->getVar('deskripsi'),
        ];

        $model->insert($data);
        return redirect()->to('/kelas');
    }

    public function dashboardData()
    {
        $sesi = session();
        $db      = \Config\Database::connect();
        $jadwal = $db->table('jadwal');
        $jadwal = $jadwal->select("nama AS les, tgl")
            ->join('les', 'les.id_les = jadwal.id_les')    
            ->where('tgl BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 3 DAY)')
            ->where('id_peserta', $sesi->id_user)
            ->orderBy('tgl')
            ->get()
            ->getResultObject();

        $data = [
            'jadwal' => $jadwal,
        ];
        return $data;
    }
}
