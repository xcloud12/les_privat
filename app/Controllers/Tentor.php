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
		$db = \Config\Database::connect();
		$sesi = session();
		$data = [
			'title' => 'Daftar Les Saya'
		];

		echo view('templates/header', $data);
		echo view('user/sidebar/tentor', $data);

		$les = $db->table('pengajuan_mengajar');
		$result = $les->select('id_pengajuan, kode, les.nama as les, user.nama as tentor, aktif, hari, jam_kerja, pengajuan_mengajar.deskripsi as deskripsi')
			->join('les', 'les.id_les = pengajuan_mengajar.id_les')
			->join('user', 'user.id_user = pengajuan_mengajar.id_tentor')
			->where('user.username',  $sesi->username)
			->get();
		d($result->getResult());

		echo view('templates/footer');
	}

	// tentor mengajukan diri untuk mengajar
	public function pengajuan()
	{
		// simpan data ke tabel pengajuan_mengajar
		if ($this->validate([
			'id_les' => 'required',
			'id_tentor' => 'required',
			'hari' => 'required',
			'jam' => 'required',
		])) {

			$model = new M_Les();
			$data = [
				'id_tentor' => $this->request->getVar('id_tentor'),
				'id_les' => $this->request->getVar('id_les'),
				'hari' => $this->request->getVar('hari'),
				'jam_kerja' => $this->request->getVar('jam'),
				'deskripsi' => $this->request->getVar('deskripsi'),
				'aktif' => 0
			];

			$model->insert($data);
			return redirect()->to('/les');
		}
	}

	public function edit_pengajuan($id)
	{
		// simpan data ke tabel pengajuan_mengajar
	}


	public function kinerja()
	{
		// ambil data kinerja dari rating tiap jadwal
		// tampilkan dalam bentuk chart
		
		$data = [
			'title' => 'Daftar Les Saya',
			'nav_active' => current_url(true)->getPath()
		];
		echo view('templates/header', $data);
		echo view('user/sidebar/tentor', $data);
		echo view('templates/footer');

	}
}
