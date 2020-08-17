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
                if (password_verify($password, $user['password'])) {
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

    public function updateProfil($username)
    {
        $model = new M_user();
        $id    = $model->getIdFromUsername($username);
        $data  = [
            'nama'         => $this->request->getVar('nama'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tgl_lahir'    => $this->request->getVar('tgl_lahir'),
            'jk'           => $this->request->getVar('jk'),
            'alamat'       => $this->request->getVar('alamat'),
            'telp'         => $this->request->getVar('telp'),
        ];

        echo json_encode($data);
        $model->update($id, $data);
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

    public function daftarPesanan($username)
    {
        $pesanan = new M_Pemesanan();
        $user = new M_user();
        $id_tentor = $user->getIdFromUsername($username);
        $result = $pesanan->daftarPesanan($id_tentor);
        echo json_encode($result);
    }

    public function terimaPesanan($id_pesanan)
    {
        $pesanan = new M_Pemesanan();
        $pesan = $pesanan->is_aktif($id_pesanan);

        $detail = $pesanan->getDetail($id_pesanan);


        if (count($pesan) > 0 && $pesan[0]->diterima == null) {
            $data = ['diterima' => '1'];
            $pesanan->update($id_pesanan, $data);

            $jadwal = new Jadwal();
            $jadwal->buatJadwal($detail);
        }
    }

    public function tolakPesanan($id_pesanan)
    {
        $pesanan = new M_Pemesanan();
        $pesan = $pesanan->is_aktif($id_pesanan);

        if (count($pesan) > 0 && $pesan[0]->diterima == null) {
            $data = ['diterima' => '0'];
            $pesanan->update($id_pesanan, $data);

            //todo: send email
        }
    }

    public function ubahsandi()
    {
        $model = new M_User();

        $id   = $model->getIdFromUsername($this->request->getVar('username'));
        $old  = $this->request->getVar('password_lama');
        $new  = $this->request->getVar('password_baru');
        $user = $model->find($id);

        if (password_verify($old, $user['password'])) {
            $model->update($id, [
                'password' => password_hash($new, PASSWORD_DEFAULT)
            ]);
            echo json_encode(['success' => true]);
            return;
        }

        echo json_encode(['success' => false]);
    }

    public function kinerja($username_tentor)
    {
        $model     = new M_user();
        $id_tentor = $model->getIdFromUsername($username_tentor);

        $db        = \Config\Database::connect();
        $jadwal    = $db->table('jadwal');
        $data      = $jadwal->select('tgl, rating, l.nama as les, p.nama as peserta, p.foto')
            ->join('les as l', 'l.id_les = jadwal.id_les')
            ->join('user as p', 'p.id_user = jadwal.id_peserta')
            ->join('user as t', 't.id_user = jadwal.id_tentor')
            ->where('id_tentor', $id_tentor)
            ->where('rating !=', 'NULL')
            ->get()
            ->getResultObject();

        if (count($data)>0){
            echo json_encode(['status' => 'success', 'kinerja' => $data]);
            return;
        }

        echo json_encode(['status' => 'nodata']);
    }
}
