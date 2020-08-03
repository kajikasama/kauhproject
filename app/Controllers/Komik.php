<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
  protected $komikModel;

  public function __construct()
  {
    $this->komikModel = new KomikModel();
  }
  public function index()
  {
    // $komik = $this->komikModel->findAll();
    $data = [

      'title' => 'Kaingin Project :: Daftar Komik',
      'komik' => $this->komikModel->getKomik()

    ];


    return view('komik/index', $data);
  }

  public function detail($slug)
  {
    $komik = $this->komikModel->getKomik($slug);

    $data = [
      'title' => 'Kaingin Project :: Detail komik',
      'komik' => $this->komikModel->getKomik($slug)
    ];

    // jika komik nggak ada
    if(empty($data['komik']))
    {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul Komik '. $slug . ' Tidak Ditemukan');
    }

    return view('komik/detail', $data);
  }
  public function create()
  {
    $data = [
      'title' => 'Form Tambah Data'
    ];

    return view('komik/create', $data);
  }
  public function save()
  {
    $slug = url_title($this->request->getVar('JudulKomik'),'-', true);

    $this->komikModel->save([
      'JudulKomik' => $this->request->getVar('JudulKomik'),
      'Slug' => $slug,
      'Penulis' => $this->request->getVar('Penulis'),
      'Penerbit' => $this->request->getVar('Penerbit'),
      'Sampul' => $this->request->getVar('Sampul')
    ]);

    session()->setFlashdata('pesan','Data berhasil nambah');

    return redirect()->to('/komik');
  }
}
