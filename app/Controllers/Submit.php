<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Submit extends Controller
{
    public function index()
    {
        $email = $this->request->getPost('email');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $nama = $this->request->getPost('nama');
        $tempat_lahir = $this->request->getPost('tempat_lahir');
        $tanggal_lahir = $this->request->getPost('tanggal_lahir');
        $jenis_kelamin = $this->request->getPost('jenis_kelamin');
        $level = $this->request->getPost('level');
        echo $email . 'email <br>';
        echo $username . 'user <br>';
        echo $password . ' <br>';
        echo $nama . ' <br>';
        echo $tempat_lahir . ' <br>';
        echo $tanggal_lahir . ' <br>';
        echo $jenis_kelamin . ' <br>';
        echo $level . ' <br>';
        return;
    }

    public function coba()
    {
        echo "HAHAHAHA";
    }

    //--------------------------------------------------------------------

}
