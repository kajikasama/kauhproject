<?php namespace App\Controllers;

class Services extends BaseController
{
	public function index()
	{
    $data = [
      'title' => 'Services :: Kauh Project'
    ];

		echo view('template/header',$data);
		echo view('services/index');
		echo view('template/footer');
	}

	//--------------------------------------------------------------------

}
