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
    // $orang = $this->orangModel->findAll();

    $data = [
      'title' => 'Orang :: Kangin Project',
      'orang' => $this->orangModel->getOrang()
    ];

    return view('orang/index', $data);
  }

  public function detail($slug)
  {
    $orang = $this->orangModel->getOrang($slug);

    $data = [
      'title' => 'Orang :: Kangin Project',
      'orang' => $this->orangModel->getOrang($slug)
    ];

    return view('orang/detail',$data);
  }
}
