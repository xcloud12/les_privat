<?php

namespace App\Controllers;

use App\Models\M_Les;

class Pengajuan extends BaseController
{
    public function index()
    {
        $les   = new M_Pengajuan();

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
}
