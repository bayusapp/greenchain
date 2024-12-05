// SPDX-License-Identifier: MIT
pragma solidity ^0.8.0;

contract PetaniCRUD {

    // Struktur untuk data petani
    struct Petani {
        string nama;
        uint usia;
        string lokasi;
    }

    // Mapping untuk menyimpan petani berdasarkan ID
    mapping(uint => Petani) private petaniData;

    // ID berikutnya yang akan digunakan
    uint private nextId = 1;

    // Event untuk notifikasi ketika data petani ditambahkan
    event PetaniDitambahkan(uint id, string nama, uint usia, string lokasi);

    // Event untuk notifikasi ketika data petani diperbarui
    event PetaniDiperbarui(uint id, string nama, uint usia, string lokasi);

    // Event untuk notifikasi ketika data petani dihapus
    event PetaniDihapus(uint id);

    // Fungsi untuk menambahkan petani
    function tambahPetani(string memory _nama, uint _usia, string memory _lokasi) public {
        petaniData[nextId] = Petani(_nama, _usia, _lokasi);
        
        emit PetaniDitambahkan(nextId, _nama, _usia, _lokasi);

        // Increment ID untuk petani berikutnya
        nextId++;
    }

    // Fungsi untuk mendapatkan data petani berdasarkan ID
    function getPetani(uint _id) public view returns (string memory nama, uint usia, string memory lokasi) {
        require(_id > 0 && _id < nextId, "Petani dengan ID tersebut tidak ditemukan.");
        
        Petani memory petani = petaniData[_id];
        return (petani.nama, petani.usia, petani.lokasi);
    }

    // Fungsi untuk memperbarui data petani berdasarkan ID
    function updatePetani(uint _id, string memory _nama, uint _usia, string memory _lokasi) public {
        require(_id > 0 && _id < nextId, "Petani dengan ID tersebut tidak ditemukan.");
        
        petaniData[_id] = Petani(_nama, _usia, _lokasi);

        emit PetaniDiperbarui(_id, _nama, _usia, _lokasi);
    }

    // Fungsi untuk menghapus data petani berdasarkan ID
    function deletePetani(uint _id) public {
        require(_id > 0 && _id < nextId, "Petani dengan ID tersebut tidak ditemukan.");
        
        delete petaniData[_id];

        emit PetaniDihapus(_id);
    }

    // Fungsi untuk mendapatkan jumlah petani yang telah ditambahkan
    function getJumlahPetani() public view returns (uint) {
        return nextId - 1; // nextId adalah ID berikutnya, jadi jumlah petani = nextId - 1
    }
}
