<?php

namespace App\Controllers;

use App\Models\M_User;
use CodeIgniter\Controller;

class User extends Controller
{
    public function index()
    {
        $session = session();
        if ($session->has('username')) {
            $data = [
                'title' => 'Dashboard',
                'username' => $session->username,
                'nama' => $session->nama,
                'level' => $session->level,
                'email' => $session->email
            ];


            echo view('templates/header', $data);
            switch ($session->get('level')) {
                case 'peserta':
                    echo view('user/sidebar/peserta', $data);
                    break;
                case 'tentor':
                    echo view('user/sidebar/tentor', $data);
                    break;
                case 'admin':
                    echo view('user/sidebar/admin', $data);
                    break;
            }
            echo view('user/dashboard', $data);
            echo view('templates/footer');
        } else {
            $session->destroy();
            header('Location: http://localhost:8080/');
            exit;
        }
    }

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
        $session = session();

        // form is filled
        if ($this->validate([
            'username' => 'required',
            'password' => 'required'
        ])) {

            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $user = $model->where('username', $username)->first();

            // make sure user exist on database
            if (!is_null($user)) {
                // check password
                if ($user['password'] == $password) {
                    // set sessions
                    $session->set($user);

                    // jump to '/dashboard'
                    header('Location: http://localhost:8080/dashboard');
                    exit;
                }
            }
        }

        // if error login
        $data = [
            'failed' => true,
            'title' => "Home"
        ];
        echo view("pages/home", $data);
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        header('Location: http://localhost:8080/');
        exit;
    }
}