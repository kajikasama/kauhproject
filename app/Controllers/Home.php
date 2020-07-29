<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
  {
    $data = [
      'title' => 'Home :: Kauh Project'
    ];

    return view('home/index', $data);
  }

	//--------------------------------------------------------------------

}
