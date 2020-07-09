<?php

namespace App\Controllers;

use App\Models\M_user;

class Admin extends BaseController
{
	public function index($master)
	{
		$user   = new M_user();

		$data = [
			'title' => "Data " . ucfirst($master),
			'user'  => $user->where('level', $master)->findAll(),
			'table' => true
		];

		echo view('templates/header', $data);
		echo view('user/sidebar/admin', $data);
		echo view("user/data/$master", $data);
		echo view('templates/footer');
	}
}
