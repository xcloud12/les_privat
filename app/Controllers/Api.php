<?php

namespace App\Controllers;

use App\Models\M_Jadwal;
use App\Models\M_Les;
use App\Models\M_Pemesanan;
use App\Models\M_user;

class Api extends BaseController
{
    public function login()
    {
        $model = new M_user();

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
                    $respon = [
                        'status' => 'success',
                        'level' => $user['level'],
                        'username' => $user['username'],
                        'email' => $user['email'],
                        'nama' => $user['nama'],
                        'jk' => $user['jk'],
                        'alamat' => $user['alamat'],
                        'telp' => $user['telp'],
                        'tempat_lahir' => $user['tempat_lahir'],
                        'tgl_lahir' => $user['tgl_lahir'],
                        'foto' => $user['foto'],
                    ];
                    echo json_encode($respon);
                    return;
                }
            }
        }

        // if error login
        $data = [
            'status' => 'failed'
        ];
        echo json_encode($data);
        return;
    }

    public function myJadwal($username)
    {
        $db      = \Config\Database::connect();
        $user    = $db->table('user');
        $jadwal  = new M_Jadwal();
        $session = session();

        // get user level
        $level = $user->select('level')->where('username', "$username")->get()->getResultArray();
        $level = $level[0]['level'];

        $myJadwal = $level == 'tentor' ? $jadwal->tentorJadwal($username) : $jadwal->pesertaJadwal($username);
        echo json_encode($myJadwal);
        return;
    }

    public function getLesByKategori($kategori)
    {
        $les = new M_Les();
        $les = $les->where('kategori', $kategori)->findAll();

        echo json_encode($les);
    }

    public function terimaPesanan($id_pesanan)
    {
        $pesanan = new M_Pemesanan();
        $pesan = $pesanan->is_aktif($id_pesanan);

        $detail = $pesanan->getDetail($id_pesanan);
        

        if (count($pesan) > 0 && $pesan[0]->diterima == '0') {
            $data = ['diterima' => '1'];
            $pesanan->update($id_pesanan, $data);
            
            $jadwal = new Jadwal();
            $jadwal->buatJadwal($detail) ;
        }
    }
}
