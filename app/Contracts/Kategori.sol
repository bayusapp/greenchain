// SPDX-License-Identifier: MIT
pragma solidity ^0.8.0;

contract Kategori {

  struct KategoriData {
    string nama_kategori;
  }

  mapping(uint => KategoriData) private kategoriData;

  uint[] public idKategori;

  event AddKategori(uint id, string nama);

  event UpdateKategori(uint id, string nama);

  event DeleteKategori(uint id);

  function tambahKategori(uint _id, string memory _nama) public {
    require(bytes(_nama).length > 0, "Nama Kategori tidak boleh kosong");

    KategoriData memory newKategori = KategoriData({
      nama_kategori: _nama
    });

    kategoriData[_id] = newKategori;
    idKategori.push(_id);
  }

  function getKategori(uint _id) public view returns (string memory nama) {
    KategoriData memory kategori = kategoriData[_id];
    return (kategori.nama_kategori);
  }

  function getAllKategori() public view returns (uint[] memory, string[] memory) {
    uint kategoriCount = idKategori.length;

    uint[] memory index = new uint[](kategoriCount);
    string[] memory namaKategori = new string[](kategoriCount);

    for (uint i = 0; i < kategoriCount; i++) {
      uint kategoriId = idKategori[i];
      KategoriData memory kategori = kategoriData[kategoriId];
      index[i] = kategoriId;
      namaKategori[i] = kategori.nama_kategori;
    }
    
    return (index, namaKategori);
  }

  function getCountKategori() public view returns (uint jumlahKategori) {
    jumlahKategori = idKategori.length;
    return (jumlahKategori);
  }

  function updateKategori(uint _id, string memory _nama) public {
    require(bytes(_nama).length > 0, "Nama Kategori tidak boleh kosong");

    // require(bytes(kategoriData[_id].namaKategori).length > 0, "Kategori tidak ditemukan");

    kategoriData[_id] = KategoriData({
      nama_kategori: _nama
    });
  }

  function deleteKategori(uint _id) public {
    delete kategoriData[_id];

    for (uint i = 0; i < idKategori.length; i++) {
      if (idKategori[i] == _id) {
        idKategori[i] = idKategori[idKategori.length - 1];
        idKategori.pop();
        break;
      }
    }
  }
}