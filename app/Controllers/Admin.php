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
			header('Location: http://localhost:8080/');
			exit;
		}
		switch ($session->get('level')) {
			case 'admin':
				break;
			default:
				header('Location: http://localhost:8080/dashboard');
				exit;
		}
	}
}