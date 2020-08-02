<?php

namespace App\Models;

use CodeIgniter\Model;

class OrangModel extends Model
{
  protected $table      = 'orang';
  protected $primaryKey = 'KodeOrang';
  protected $useTimestamps = true;
  protected $createdField  = 'CreatedAt';
  protected $updatedField  = 'UpdatedAt';

  public function getOrang($slug = false)
  {
    if ($slug == false) {
      // findAll() == SELECT * FROM 
      return $this->findAll();
    }
    // where() == WHERE || first == ORDER BY ASC; 
    return $this->where(['Slug' => $slug])->first();
  }
}
