<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Home :: Kangin Project'
    ];

    return view('home/index', $data);
  }
  public function about()
  {
    $data = [
      'title' => 'About :: Kangin Project'
    ];

    return view('about/index', $data);
  }
  public function services()
  {
    $data = [
      'title' => 'Services :: Kangin Project'
    ];

    return view('services/index', $data);
  }
  public function contact()
  {
    $data = [
      'title' => 'Contact Us :: Kangin Project',
      'nama' => 'Agus Chandra',
      'alamat' => 'Perumahan Tarumas',
      'umur' => '1700 tahun'
    ];

    return view('contact/index', $data);
  }

  //--------------------------------------------------------------------

}
