<?php

namespace App\Controllers;

use App\Models\MenuModel;
use CodeIgniter\HTTP\Request;

class Menu extends BaseController
{
  protected $menuModel;
  public function __construct()
  {
    $this->menuModel = new MenuModel();
  }

  public function index()
  {
    $menu = $this->menuModel->findAll();

    $data = [
      'title' => 'Menu | CDS',
      'menu' => $menu
    ];


    return view('menu/index', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Menu | CDS',
    ];
    return view('menu/create', $data);
  }

  public function save()
  {
    $this->menuModel->save([
      'kd_menu' => $this->request->getVar('kd_menu'),
      'nama_menu' => $this->request->getVar('nama_menu'),
      'harga' => $this->request->getVar('harga')
    ]);

    session()->setFlashdata('pesan', 'Menu baru berhasil ditambahkan.');

    return redirect()->to('/menu');
  }
}
