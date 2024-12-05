<?php

namespace App\Models;

use CodeIgniter\Model;
use Web3\Web3;
use Web3\Contract;

class EthereumModel extends Model
{
  private $web3;
  private $contract;

  public function __construct()
  {
    // URL untuk menghubungkan ke Ganache (Ethereum Local Node)
    $this->web3 = new Web3('http://127.0.0.1:7545'); // Ganti jika menggunakan Infura atau Ethereum jaringan lain

    // ABI dari kontrak Solidity Anda
    $abi = json_decode(file_get_contents(APPPATH . 'Contracts/abi.json'), true);

    // Alamat kontrak yang ingin diakses
    $contractAddress = '0xE75D81670F62B52D4541d0cDabc144dc38391a1a'; // Ganti dengan alamat kontrak Anda

    // Inisialisasi kontrak
    $this->contract = new Contract($this->web3->provider, $abi);
    $this->contract->at($contractAddress);
  }

  // Fungsi untuk mengambil data petani berdasarkan ID
  public function getPetani($id)
  {
    $result = null;
    $this->contract->call('getPetani', [$id], function ($err, $res) use (&$result) {
      if ($err !== null) {
        throw new \Exception($err->getMessage());
      }
      $result = $res;
    });

    if ($result) {
      // Mengembalikan data petani
      return [
        'nama' => $result[0],
        'usia' => $result[1],
        'lokasi' => $result[2]
      ];
    } else {
      return null;
    }
  }

  // Fungsi untuk mengambil semua data petani
  public function getAllPetani()
  {
    $result = null;
    $this->contract->call('getAllPetani', [], function ($err, $res) use (&$result) {
      if ($err !== null) {
        throw new \Exception($err->getMessage());
      }
      $result = $res;
    });

    if ($result) {
      // Mengembalikan hasil dalam format array
      return [
        'nama' => $result[0],
        'usia' => $result[1],
        'lokasi' => $result[2]
      ];
    } else {
      return null;
    }
  }
}
