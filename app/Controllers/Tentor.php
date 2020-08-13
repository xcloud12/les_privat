<?php

namespace App\Controllers;

use App\Models\M_Les;
use App\Models\M_Pengajuan;
use App\Models\M_user;

class Tentor extends User
{

	// daftar les yang diajar
	public function les()
	{
		$db   = \Config\Database::connect();
		$sesi = session();
		helper('number');


		$les    = $db->table('pengajuan_mengajar');
		$result = $les->select('id_pengajuan, kode, kategori, harga, les.nama as les, user.nama as tentor, aktif, hari, jam_kerja, pengajuan_mengajar.deskripsi as deskripsi')
			->join('les', 'les.id_les = pengajuan_mengajar.id_les')
			->join('user', 'user.id_user = pengajuan_mengajar.id_tentor')
			->where('user.username',  $sesi->username)
			->get();


		$data = [
			'title'     => 'Daftar Les Saya',
			'pengajuan' => $result->getResultObject(),
		];

		echo view('templates/header', $data);
		echo view('user/sidebar/tentor', $data);
		echo view('user/data/tentor/pengajuan', $data);
		echo view('templates/footer');
	}

	// tentor mengajukan diri untuk mengajar
	public function pengajuan($id_les)
	{
		$model = new M_Pengajuan();
		$sesi  = session();
		helper('text');

		// mendapatkan data hari
		$hari = [];
		if (null !== $this->request->getVar('senin')) {
			$hari[] = 'senin';
		};
		if (null !== $this->request->getVar('selasa')) {
			$hari[] = 'selasa';
		}
		if (null !== $this->request->getVar('rabu')) {
			$hari[] = 'rabu';
		}
		if (null !== $this->request->getVar('kamis')) {
			$hari[] = 'kamis';
		}
		if (null !== $this->request->getVar('jumat')) {
			$hari[] = 'jumat';
		}
		if (null !== $this->request->getVar('sabtu')) {
			$hari[] = 'sabtu';
		}
		if (null !== $this->request->getVar('minggu')) {
			$hari[] = 'minggu';
		}

		// simpan data ke tabel pengajuan_mengajar
		$kode = random_string('alnum', 12);
		$data = [
			'id_tentor' => $sesi->id_user,
			'id_les'    => $id_les,
			'hari'      => implode(',', $hari),
			'jam_kerja' => $this->request->getVar('jam'),
			'deskripsi' => $this->request->getVar('deskripsi'),
			'kode'      => $kode,
			'aktif'     => '0'
		];


		$model->insert($data);

		return redirect()->to('/les');
	}

	public function edit_pengajuan($id)
	{
		$model = new M_Pengajuan();

		// simpan data ke tabel pengajuan_mengajar
		$hari = [];
		if (null !== $this->request->getVar('senin')) {
			$hari[] = 'senin';
		};
		if (null !== $this->request->getVar('selasa')) {
			$hari[] = 'selasa';
		}
		if (null !== $this->request->getVar('rabu')) {
			$hari[] = 'rabu';
		}
		if (null !== $this->request->getVar('kamis')) {
			$hari[] = 'kamis';
		}
		if (null !== $this->request->getVar('jumat')) {
			$hari[] = 'jumat';
		}
		if (null !== $this->request->getVar('sabtu')) {
			$hari[] = 'sabtu';
		}
		if (null !== $this->request->getVar('minggu')) {
			$hari[] = 'minggu';
		}

		$data = [
			'hari'      => implode(',', $hari),
			'jam_kerja' => $this->request->getVar('jam'),
			'deskripsi' => $this->request->getVar('deskripsi'),
		];
		$model->update($id, $data);
		// echo $id;
		return redirect()->to('/les');
	}

	public function delete_pengajuan($id)
	{
		$model = new M_Pengajuan();
		$res = $model->find($id);
		if(!is_null($res)){
			$model->delete($id);
		}
		// todo: show warning
		return redirect()->to('/les');
	}


	public function kinerja()
	{
		// ambil data kinerja dari rating tiap jadwal
		// tampilkan dalam bentuk chart

		$data = [
			'title'      => 'Daftar Les Saya',
			'nav_active' => current_url(true)->getPath()
		];
		echo view('templates/header', $data);
		echo view('user/sidebar/tentor', $data);
		echo view('user/data/tentor/ulasan', $data);
		echo view('templates/footer');
	}

	public function dashboardData()
	{
		$sesi = session();
		$username = $sesi->username;

		$db      = \Config\Database::connect();
		$dbs = $db->table('user');
		$peserta = $dbs->select("user.nama AS tentor, count(id_peserta) AS peserta")
			->join('pengajuan_mengajar', 'pengajuan_mengajar.id_tentor = user.id_user')
			->join('pemesanan_les', 'pemesanan_les.id_pengajuan = pengajuan_mengajar.id_pengajuan')
			->where('pemesanan_les.diterima', '1')
			->where('username', $username)
			->groupBy('tentor')
			->distinct()
			->get()
			->getResultObject();

		$dbs = $db->table('pengajuan_mengajar');
		$mapel = $dbs->select('count(*) as mapel')
			->join('les', 'les.id_les=pengajuan_mengajar.id_les')
			->where('id_tentor', $sesi->id_user)
			->where('pengajuan_mengajar.aktif', '1')
			->distinct()
			->get()
			->getResultObject();

		$data = [
			'peserta' => $peserta,
			'mapel' =>$mapel
		];
		return $data;
	}
}
