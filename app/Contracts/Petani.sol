// SPDX-License-Identifier: MIT
pragma solidity ^0.8.0;

contract Petani {

  // struktur data untuk petani
  struct PetaniData {
    string nama_petani;
    string alamat_petani;
    string kategori_petani;
  }

  // mapping untuk menyimpan petani berdasarkan ID
  mapping(uint => PetaniData) private petaniData;

  // id petani yang akan digunakan
  uint private id = 1;

  // event untuk notifikasi ketika data petani ditambahkan
  event AddPetani(uint id, string nama, string alamat, string kategori);

  // Event untuk notifikasi ketika data petani diperbarui
  event UpdatePetani(uint id, string nama, string alamat, string kategori);


}