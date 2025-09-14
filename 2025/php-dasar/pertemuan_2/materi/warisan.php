<?php

class Kendaraan
{
    public $merk;
    public $tahun;

    public function info()
    {
        echo "Ini adalah kendaraan merk {$this->merk} tahun {$this->tahun}.\n";
    }
}
class Mobil extends Kendaraan {
    public $jumlahPintu;
    public function infoMobil() {
        $this->info();
        echo "Mobil ini memiliki {$this->jumlahPintu} pintu.\n";
    }
}
$mobilSaya = new Mobil();
$mobilSaya->merk = "Honda";
$mobilSaya->tahun = 2020;
$mobilSaya->jumlahPintu = 4;
$mobilSaya->infoMobil();
?>
