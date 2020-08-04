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
        $sesi = session();
        $pengajuan = new M_Pengajuan();

        $data = [
            'title' => 'Kelas',
            'pemesanan' => $pengajuan->pengajuanAktif(),
        ];

        echo view('templates/header', $data);
        echo view($this->getsidebar(), $data);
        echo view('user/data/peserta/pemesanan', $data);
        echo view('templates/footer');
    }

    public function ikut_kelas($id_pengajuan)
    {
        $sesi = session();
        $model =new  M_Pemesanan();
        $tgl = new Time('now');

        $data=[
            'id_pengajuan' => $id_pengajuan,
            'id_peserta' => $sesi->id_user,
            'tgl_pesan' => $tgl->toDateString(),
            'hari' => $this->request->getVar('hari_mengajar'),
            'deskripsi' => $this->request->getVar('deskripsi'),
        ];

        $model->insert($data);
        return redirect()->to('/kelas');
    }
}
