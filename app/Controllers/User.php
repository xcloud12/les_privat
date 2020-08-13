<?php

namespace App\Controllers;

use App\Models\M_User;
use CodeIgniter\Controller;

class User extends Controller
{
    public function getsidebar()
    {
        $sesi = session();
        switch ($sesi->get('level')) {
            case 'peserta':
                return 'user/sidebar/peserta';
                break;
            case 'tentor':
                return 'user/sidebar/tentor';
                break;
            case 'admin':
                return 'user/sidebar/admin';
                break;
        }
    }
    public function getDashboard()
    {
        $sesi = session();
        switch ($sesi->get('level')) {
            case 'peserta':
                return 'user/data/peserta/dashboard';
                break;
            case 'tentor':
                return 'user/data/tentor/dashboard';
                break;
            case 'admin':
                return 'user/dashboard';
                break;
        }
    }
    public function index()
    {
        $session = session();

        $this->cek_login($session);

        $user = '';
        switch ($session->level) {
            case 'admin':
                $user = new Admin();
                break;
            case 'tentor':
                $user = new Tentor();
                break;
            case 'peserta':
                $user = new Peserta();
                break;
        }
        $dashboard_data = $user->dashboardData();

        $data = [
            'title'     => 'Dashboard',
            'username'  => $session->username,
            'nama'      => $session->nama,
            'level'     => $session->level,
            'email'     => $session->email,
            'dashboard' => $dashboard_data
        ];

        setlocale(LC_ALL, "id");
        echo view('templates/header', $data);
        echo view($this->getsidebar(), $data);
        echo view($this->getDashboard(), $data);
        echo view('templates/footer');
    }

    public function daftar()
    {
        $model = new M_User();

        if (! is_null($model->where('username', $this->request->getVar('username'))->first())){
            return redirect()->to('/daftar');
        }

        $model->save([
            "email"    => $this->request->getVar('email'),
            "username" => $this->request->getVar('username'),
            "password" => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            "nama"     => $this->request->getVar('nama'),
            "level"    => $this->request->getVar('level'),
        ]);

        return redirect()->to('/');
    }

    public function login()
    {
        $model   = new M_User();
        $session = session();

        // form is filled
        if ($this->validate([
            'username' => 'required',
            'password' => 'required'
        ])) {

            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $user     = $model->where('username', $username)->first();

            // make sure user exist on database
            if (!is_null($user)) {
                // check password
                if (password_verify($password, $user['password'])) {
                    // set sessions
                    $session->set($user);

                    // jump to '/dashboard'
                    return redirect()->to("/dashboard");
                }
            }
        }

        // if error login
        $data = [
            'failed' => true,
            'title'  => "Home"
        ];
        echo view("pages/home", $data);
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to("/");
    }

    protected function cek_login($session)
    {
        if (!$session->has('username')) {
            $session->destroy();
            redirect()->to("/");
            exit;
        }
    }

    public function profil()
    {
        // ambil data dari session
        $sesi = session();

        $data = [
            'title'        => 'Profil',
            'username'     => $sesi->username,
            'nama'         => $sesi->nama,
            'email'        => $sesi->email,
            'jk'           => $sesi->jk,
            'alamat'       => $sesi->alamat,
            'telp'         => $sesi->telp,
            'tempat_lahir' => $sesi->tempat_lahir,
            'tgl_lahir'    => $sesi->tgl_lahir,
            'foto'         => "/img/img_profil/" . $sesi->foto,
            'form_aksi'    => '/profil/' . $sesi->id_user
        ];

        // tampilkan di halaman profil
        echo view('templates/header', $data);
        echo view("user/sidebar/$sesi->level", $data);
        echo view("user/templates/profil", $data);
        echo view('templates/footer', $data);
    }

    public function update($id)
    {
        $model = new M_user();
        $sesi  = session();

        $foto          = $this->request->getFile('foto');
        $foto_new_name = $sesi->username . ".jpg";
        $foto->move(FCPATH . "img/img_profil", $foto_new_name, true);

        $data = [
            'nama'         => $this->request->getVar('nama'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tgl_lahir'    => $this->request->getVar('tanggal_lahir'),
            'jk'           => $this->request->getVar('jenis_kelamin'),
            'alamat'       => $this->request->getVar('alamat'),
            'telp'         => $this->request->getVar('no_telp'),
            'foto'         => $foto_new_name
        ];

        $model->update($id, $data);
        $sesi = session();
        $sesi->set($data);

        return redirect()->to("/dashboard");
    }
}
