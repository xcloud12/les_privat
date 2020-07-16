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

    public function update($id)
    {
        if ($this->validate([
            'kategori' => 'required',
            'nama' => 'required',
            'harga' => 'required',
        ])) {
            $model = new M_Les();

            $data = [
                'kategori' => $this->request->getVar('kategori'),
                'nama' => $this->request->getVar('nama'),
                'harga' => $this->request->getVar('harga'),
                'deskripsi' => $this->request->getVar('deskripsi')
            ];
            $model->update($id, $data);
            return redirect()->to('/data/les');
        }
    }

    public function create()
    {
        if ($this->validate([
            'kategori' => 'required',
            'nama' => 'required',
            'harga' => 'required',
        ])) {
            $model = new M_Les();

            $data = [
                'kategori' => $this->request->getVar('kategori'),
                'nama' => $this->request->getVar('nama'),
                'harga' => $this->request->getVar('harga'),
                'deskripsi' => $this->request->getVar('deskripsi')
            ];
            $model->insert($data);
            return redirect()->to('/data/les');
        }
    }

    public function delete($id)
    {
        $model = new M_Les();
        $model->delete($id);
        return redirect()->to('/data/les');
    }
}