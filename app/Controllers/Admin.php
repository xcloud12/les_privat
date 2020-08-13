<?php

namespace App\Controllers;

use App\Models\M_user;

class Admin extends BaseController
{
	public function index($master)
	{
		$sesi = session();
		$this->cek_login($sesi);

		$user   = new M_user();

		$data = [
			'title' => "Data " . ucfirst($master),
			'user'  => $user->where('level', $master)->findAll(),
			'table' => true
		];

		echo view('templates/header', $data);
		echo view('user/sidebar/admin', $data);
		echo view("user/data/$master", $data);
		echo view('templates/footer', $data);
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

	public function update($table, $id)
	{
		$model = new M_user();

		$data = [
			'nama' => $this->request->getVar('nama'),
			'username' => $this->request->getVar('username'),
			'email' => $this->request->getVar('email'),
			'tempat_lahir' => $this->request->getVar('tempat_lahir'),
			'tgl_lahir' => $this->request->getVar('tanggal_lahir'),
			'jk' => $this->request->getVar('jenis_kelamin'),
			'alamat' => $this->request->getVar('alamat'),
			'telp' => $this->request->getVar('no_telp'),
		];

		$model->update($id, $data);

		return redirect()->to("/data/$table");
	}

	public function delete($table, $id)
	{
		$model = new M_user();
		$model->delete($id);
		return redirect()->to("/data/$table");
	}

	public function dashboardData()
	{
		$db      = \Config\Database::connect();
		$user = $db->table('user');
		$total = $user->select("(select COUNT(*) FROM user WHERE LEVEL='tentor') AS tentor, 
								(select COUNT(*) FROM user WHERE LEVEL='peserta') AS peserta,
								(SELECT COUNT(*) FROM les) AS les")
			->distinct()
			->get()
			->getResultObject();

		$les = $db->table('pemesanan_les');
		$top = $les->select('kategori, nama, count(*) as peminat')
			->join('pengajuan_mengajar', 'pengajuan_mengajar.id_pengajuan = pemesanan_les.id_pengajuan')
			->join('les', 'les.id_les = pengajuan_mengajar.id_les')
			->orderBy('peminat', 'desc')
			->orderBy('nama','asc')
			->groupBy('nama')
			->limit(10)
			->get()
			->getResultObject();

		$data = [
			'total' => $total[0],
			'top' => $top
		];
		return $data;
	}

	public function reset_pass()
	{
		$id   = $this->request->getVar('id_reset');
		$db   = \Config\Database::connect();
		$user = $db->table('user');
		$user = $user->select('username')->where('id_user', $id)->get()->getResultObject()[0];

		$data=[
			'password' => password_hash($user->username, PASSWORD_DEFAULT)
		];

		$model = new M_user();
		$model->update($id, $data);
		return redirect()->to(previous_url());
	}
}
