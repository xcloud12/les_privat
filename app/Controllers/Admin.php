<?php

namespace App\Controllers;

use App\Models\M_user;

class Admin extends BaseController
{
	public function index($master)
	{
		$this->cek_login(session());
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

	public function update($table, $id )
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
}