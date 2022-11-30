<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
  protected $table = 'tb_menu'; 
  protected $primaryKey = 'id_menu';
  protected $useTimestamps = true;

  protected $allowedFields    = ['kd_menu', 'nama_menu', 'harga'];
}
