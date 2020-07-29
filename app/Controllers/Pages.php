<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Home :: Kauh Project'
    ];

    return view('home/index', $data);
  }
  public function about()
  {
    $data = [
      'title' => 'About :: Kauh Project'
    ];

    return view('about/index', $data);
  }
  public function services()
  {
    $data = [
      'title' => 'Services :: Kauh Project'
    ];

    return view('services/index', $data);
  }
  public function contact()
  {
    $data = [
      'title' => 'Contact Us :: Kauh Project',
      'nama' => 'Agus Chandra',
      'alamat' => 'Perumahan Tarumas',
      'umur' => '1700 tahun'
    ];

    return view('contact/index', $data);
  }

  //--------------------------------------------------------------------

}
