<?php

class pengenalan_oop
{
    // properti
    public $merk, $warna;

    // method
    public function klakson()
    {
        echo "Beep! Beep!";
    }

}
$mobilSaya = new pengenalan_oop();
// Menetapkan nilai untuk property
$mobilSaya->warna = "Merah";
$mobilSaya->merk = "Toyota";
// Mengakses property
echo "Warna mobil: " . $mobilSaya->warna . "\n";
echo "Merk mobil: " . $mobilSaya->merk . "\n";
// Memanggil method
$mobilSaya->klakson(); // Output: mobil sedang berjalan
