<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Data Tentor'
		];
		echo view('templates/header', $data);
		echo view('user/sidebar/admin', $data);
		echo view('user/data/tentor', $data);
		echo view('templates/footer');
	}
}