<?php

namespace App\Controllers;

use App\Models\PelangganModel;

class Pelanggan extends BaseController
{
  protected $pelangganModel;
  public function __construct()
  {
    $this->pelangganModel = new PelangganModel();
  }

  public function index()
  {
    $pelanggan = $this->pelangganModel->findAll();

    $data = [
      'title' => 'Pelanggan | CDS',
      'pelanggan' => $pelanggan
    ];


    return view('pelanggan/index', $data);
  }
}
