<?php

namespace App\Controllers;

use App\Models\M_Jadwal;

class Jadwal extends BaseController
{
    public function index()
    {
        $this->cek_login(session());
        $jadwal   = new M_Jadwal();
        setlocale(LC_ALL, 'ID');

        $data = [
            'title' => "Data Jadwal",
            'jadwal'  => $jadwal->listJadwal(),
            'table' => true
        ];

        echo view('templates/header', $data);
        echo view('user/sidebar/admin', $data);
        // dd($data);
        echo view("user/data/jadwal", $data);
        echo view('templates/footer');
    }
    protected function cek_login($session)
    {
        if (!$session->has('username')) {
            $session->destroy();
            redirect()->to('/');
            exit;
        }
        switch ($session->get('level')) {
            case 'admin':
                break;
            default:
                redirect()->to('/dashboard');
                exit;
        }
    }
    public function buatJadwal($data_pesanan)
    {
        helper('date');
        $date = date_parse($data_pesanan->tgl_pesan);

        switch ($data_pesanan->hari) {
            case 'minggu':
                $now = date_create('sunday');
                break;
            case 'senin':
                $now = date_create('monday');
                break;
            case 'selasa':
                $now = date_create('tuesday');
                break;
            case 'rabu':
                $now = date_create('wednesday');
                break;
            case 'kamis':
                $now = date_create('thursday');
                break;
            case 'jumay':
                $now = date_create('friday');
                break;
            case 'sabtu':
                $now = date_create('saturday');
                break;
        }



        for ($i = 0; $i < $data_pesanan->banyak_pertemuan; $i++) {
            // echo $i+1 . " -> ". $now->format('Y-m-d');
            $data = [
                'id_tentor' => $data_pesanan->id_tentor,
                'id_les' => $data_pesanan->id_les,
                'id_peserta' => $data_pesanan->id_peserta,
                'tgl' => $now->format('Y-m-d'),
            ];
            $jadwal = new M_Jadwal();
            $jadwal->insert($data);

            $now = date_add($now, date_interval_create_from_date_string('1 week'));
        }
    }

    public function absensi($id_jadwal, $is_absen)
    {
        $jadwal = new M_Jadwal();
        $absen = [
            'absen' => $is_absen === "true" ? "1" : "0"
        ];

        $jadwal->update($id_jadwal, $absen);
    }

    public function rateJadwal($id_jadwal)
    {
        $model = new M_Jadwal();

        $data = [
            'rating' => $this->request->getVar('rating')
        ];
        $model->update($id_jadwal, $data);
    }
}
