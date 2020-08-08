<?php

namespace App\Controllers;

use App\Models\M_Pengajuan;
use App\Models\M_user;
use App\Models\M_Pemesanan;

class Pemesanan extends BaseController
{
    public function index()
    {
        helper('number');
        $pemesanan   = new M_Pemesanan();
        setlocale(LC_ALL, 'ID');

        $data = [
            'title' => "Data Pemesanan Les Privat",
            'pemesanan'  => $pemesanan->allpemesanan(),
            'table' => true
        ];

        // d($data['pemesanan']);
        echo view('templates/header', $data);
        echo view('user/sidebar/admin', $data);
        echo view("user/data/pemesanan", $data);
        echo view('templates/footer', $data);
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
}
