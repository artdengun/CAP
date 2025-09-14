<?php

// Definisi kelas
class mobil {
    // Property
    public $warna;
    public $merk;

    // Method
    public function jalan() {
        echo "mobil sedang berjalan";
    }
}

$mobilSaya = new mobil();
// Menetapkan nilai untuk property
$mobilSaya->warna = "Merah";
$mobilSaya->merk = "Toyota";
// Mengakses property
echo "Warna mobil: " . $mobilSaya->warna . "\n";
echo "Merk mobil: " . $mobilSaya->merk . "\n";
// Memanggil method
$mobilSaya->jalan(); // Output: mobil sedang berjalan