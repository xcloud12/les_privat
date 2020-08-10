<?php

namespace App\Controllers;

use App\Models\M_Les;
use App\Models\M_Pengajuan;

class Pengajuan extends BaseController
{
    public function index()
    {
        $pengajuan   = new M_Pengajuan();

        $data = [
            'title' => "Data Pengajuan Mengajar",
            'pengajuan'  => $pengajuan->allPengajuan(),
            'table' => true
        ];

        echo view('templates/header', $data);
        echo view('user/sidebar/admin', $data);
        echo view("user/data/pengajuan", $data);
        echo view('templates/footer', $data);
    }

    public function update($id_pengajuan)
    {
        $model    = new M_Pengajuan();
        $diterima = $this->request->getVar('terima') !== null ? '1':'0';

        $data = [
            'aktif' => $diterima
        ];

        $model->update($id_pengajuan, $data);
        return redirect()->to('/data/pengajuan');
    }
}
