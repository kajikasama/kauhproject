<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
  protected $table = 'komik';
  protected $primaryKey = 'KodeKomik';
  protected $useTimestamps = true;
  protected $createdField = 'CreatedAt';
  protected $updatedField = 'UpdateAt';

  public function getKomik($slug = false)  
  {
    if($slug == false)
    {
      return $this->findAll();
    }

    return $this->where(['Slug' => $slug])->first();
  }

}
