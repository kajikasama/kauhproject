<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home :: Kauh Project'
		];

		echo view('template/header', $data);
		echo view('home/index');
		echo view('template/footer');
	}

	//--------------------------------------------------------------------

}
