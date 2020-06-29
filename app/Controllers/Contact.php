<?php

namespace App\Controllers;

class Contact extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Contact Us :: Kauh Project'
		];

		echo view('template/header', $data);
		echo view('contact/index');
		echo view('template/footer');
	}

	//--------------------------------------------------------------------

}
