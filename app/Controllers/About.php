<?php namespace App\Controllers;

class About extends BaseController
{
	public function index()
	{
    $data = [
      'title' => 'About :: Kauh Project'
    ];

		echo view('template/header',$data);
		echo view('about/index');
		echo view('template/footer');
	}

	//--------------------------------------------------------------------

}
