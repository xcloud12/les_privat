<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
    public function index()
    {
        echo view('pages/daftar');
    }
    public function ls()
    {
        echo view('pages/lupa_password');
    }
    public function pengajuan()
    {
        $data = [
            'title' => "Pengajuan Mengajar"
        ];
        echo view('templates/header', $data);
        echo view('user/sidebar/tentor', $data);
        echo view('user/data/tentor/pengajuan', $data);
        echo view('templates/footer', $data);
    }
    public function profil()
    {
        $data = [
            'title' => "Profil Saya"
        ];
        echo view('templates/header', $data);
        echo view('user/sidebar/tentor', $data);
        echo view('user/data/tentor/profil', $data);
        echo view('templates/footer', $data);
    }
    public function ulasan()
    {
        $data = [
            'title' => "Ulasan Saya"
        ];
        echo view('templates/header', $data);
        echo view('user/sidebar/tentor', $data);
        echo view('user/data/tentor/ulasan', $data);
        echo view('templates/footer', $data);
    }

    public function view($page = 'home')
    {
        switch ($page) {
            case 'home':
            case 'login':
                $session = session();
                if ($session->has('username')) {
                    return redirect()->to('/dashboard');
                }
                break;
        }

        if (!is_file(APPPATH . '/Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data = [
            'title' => ucfirst($page)
        ];
        echo view('pages/' . $page, $data);
    }
}
