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

}
