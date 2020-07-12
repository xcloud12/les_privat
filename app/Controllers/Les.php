<?php

namespace App\Controllers;

use App\Models\M_Les;

class Les extends BaseController
{
    public function index()
    {
        $this->cek_login(session());
        $les   = new M_Les();

        $data = [
            'title' => "Data Mata Pelajaran",
            'les'  => $les->findAll(),
            'table' => true
        ];

        echo view('templates/header', $data);
        echo view('user/sidebar/admin', $data);
        echo view("user/data/les", $data);
        echo view('templates/footer');
    }

    protected function cek_login($session)
    {
        if (!$session->has('username')) {
            $session->destroy();
            header('Location: http://localhost:8080/');
            exit;
        }
    }
}