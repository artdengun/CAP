<?php

interface BentukDuaDimensi
{
    public function hitungLuas();
}

abstract class BangunDatar implements BentukDuaDimensi
{
    abstract public function hitungKeliling();
}

class Persegi extends BangunDatar
{
    private $sisi;

    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    public function hitungLuas()
    {
        return $this->sisi * $this->sisi;
    }
    public function hitungKeliling() {
        return 4 * $this->sisi;
    }
}
$persegi = new Persegi(5);
echo "Luas persegi: " . $persegi->hitungLuas() . "\n";
echo "Keliling persegi: " . $persegi->hitungKeliling();
?>