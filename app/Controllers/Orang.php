<?php

namespace App\Controllers;

use App\Models\OrangModel;

class Orang extends BaseController
{
  protected $orangModel;

  public function __construct()
  {
    $this->orangModel = new OrangModel();
  }

  public function index()
  {
    $orang = $this->orangModel->findAll();

    $data = [
      'title' => 'Orang :: Kauh Project',
      'orang' => $orang
    ];

    return view('orang/index',$data);
  }
}