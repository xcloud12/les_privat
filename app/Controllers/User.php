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

        if (!is_null($model->where('username', $this->request->getVar('username'))->first())) {
            return redirect()->to('/daftar');
        }

        $level = $this->request->getVar('level') == 'admin' ? 'peserta' : $this->request->getVar('level');

        $model->save([
            "email"    => $this->request->getVar('email'),
            "username" => $this->request->getVar('username'),
            "password" => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            "nama"     => $this->request->getVar('nama'),
            "level"    => $level,
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
            'id_user'      => $sesi->id_user,
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
        $model = new M_User();
        $sesi  = session();

        $foto          = $this->request->getFile('foto');
        $foto_new_name = $sesi->username . ".jpg";
        if ($foto->isValid()) {
            $foto->move(FCPATH . "img/img_profil", $foto_new_name, true);
        }

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

    public function update_pass()
    {
        $model = new M_User();

        $id  = $this->request->getVar('_id');
        $old = $this->request->getVar('password_lama');
        $new = $this->request->getVar('password_baru');

        $user = $model->where('id_user', $id)->first();
        if (password_verify($old, $user['password'])) {
            $model->update($id, ['password' => password_hash($new, PASSWORD_DEFAULT)]);
            // }else{
            // todo: tampil eror gagal
        }
        return redirect()->to('/profil');
    }

    public function cek_email()
    {
        $email = $this->request->getVar('email');

        $db   = \Config\Database::connect();
        $user = $db->table('user');

        $res = $user->select('email')->where('email', $email)->get()->getResultObject();
        if (count($res) > 0) {
            echo json_encode(['status' => true]);
            return;
        }
        echo json_encode(['status' => false]);
    }

    public function reset_pass()
    {
        $email     = $this->request->getVar('email');
        $username  = $this->request->getVar('username');
        $tgl_lahir = $this->request->getVar('tgl_lahir');
        $telp      = $this->request->getVar('telp');

        $db   = \Config\Database::connect();
        $user = $db->table('user');
        $res  = $user->select('username, tgl_lahir, telp')->where('email', $email)->get()->getResultObject();
        if (count($res) > 0) {
            if (
                $res[0]->username == $username
                && $res[0]->tgl_lahir == $tgl_lahir
                && $res[0]->telp == $telp
            ) {
                helper('text');
                $new_pass = random_string('alnum', 16);
                $user->where('email', $email);
                $user->update(['password' => password_hash($new_pass, PASSWORD_DEFAULT)]);
                echo json_encode([
                    'status'   => true,
                    'new_pass' => $new_pass
                ]);
                return;
            }
        }

        echo json_encode(['status'   => false]);
    }
}
