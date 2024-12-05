<?php

namespace App\Controllers;

use App\Models\EthereumModel;

class EthereumController extends BaseController
{
  protected $ethereumModel;
  public function __construct()
  {
    // Membuat objek model EthereumModel
    $this->ethereumModel = new EthereumModel();
  }

  // Fungsi untuk menampilkan data petani berdasarkan ID
  public function viewPetani($id)
  {
    // Mengambil data petani dari model
    $data = $this->ethereumModel->getPetani($id);

    if ($data === null) {
      return view('error', ['message' => 'Petani tidak ditemukan!']);
    }

    // Menyiapkan data untuk dikirim ke view
    return view('petani_view', $data);
  }

  public function viewAllPetani()
  {
    // Mengambil semua data petani dari model
    $data = $this->ethereumModel->getAllPetani();

    if ($data === null) {
      return view('error', ['message' => 'Tidak ada data petani!']);
    }

    // Menyiapkan data untuk dikirim ke view
    return view('all_petani_view', $data);
  }
}
