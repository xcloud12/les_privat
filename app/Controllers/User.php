<?php

namespace App\Controllers;

use App\Models\M_User;
use CodeIgniter\Controller;

class User extends Controller
{
    
    public function daftar()
    {
        $model = new M_User();
        
        $model->save([
            "email" => $this->request->getVar('email'),
            "username" => $this->request->getVar('username'),
            "password" => $this->request->getVar('password'),
            "nama" => $this->request->getVar('nama'),
            "tempat_lahir" => $this->request->getVar('tempat_lahir'),
            // "tanggal_lahir" => $this->request->getVar('tanggal_lahir'),
            "jenis_kelamin" => $this->request->getVar('jenis_kelamin'),
            "level" => $this->request->getVar('level'),
        ]);
    }

    public function coba()
    {
        echo "HAHAHAHA";
    }

    //--------------------------------------------------------------------

}
