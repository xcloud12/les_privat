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
            "tempat_lahir" => $this->refquest->getVar('tempat_lahir'),
            // "tanggal_lahir" => $this->request->getVar('tanggal_lahir'),
            "jenis_kelamin" => $this->request->getVar('jenis_kelamin'),
            "level" => $this->request->getVar('level'),
        ]);
    }

    public function login()
    {
        $model = new M_User();

        if (!$this->validate([
            'username' => 'required',
            'password' => 'required'
        ])) {
            $data = [
                'failed' => true,
                'title' => "Home"
            ];
            echo view("templates/header", $data);
            echo view("pages/home", $data);
            echo view("templates/footer", $data);
            die;
        } else {

            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $user = $model->where('username', $username)->first();

            if ($user['password'] == $password) {
                echo "login sukses<br/>";
                echo $user['level'];
            } else {
            }
        }
    }
}