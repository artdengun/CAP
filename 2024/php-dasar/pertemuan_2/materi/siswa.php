<?php

class siswa{
    public $nama, $kelas;
    // Contoh Properti dan Metode
    private $nilai;

    /* CONTOH CLASS DAN OBJECT*/
    public function perkenalan() {
        echo "Halo, nama saya ", $this->nama . " dari kelas ", $this->kelas . ".";
    }

    public function setNilai($nilai){
        $this->nilai = $nilai;
    }
    public function getNilai(){
        return $this->nilai;
    }
    public function hitungRataRata($nilai1, $nilai2, $nilai3){
        return ($nilai1 + $nilai2 + $nilai3) / 3;
    }
    // close

}
echo "===========CLASS DAN OBJECT============\n";
$siswa = new siswa();
$siswa->nama = "Budi";
$siswa->kelas = "XI IPA 1";
$siswa->perkenalan();
echo "\n\n";
echo "===========PROPERTI DAN METODE============\n";

$siswa1 = new siswa();
$siswa1->nama = "Budi";
$siswa1->kelas = "XI IPA 1";
$siswa1->setNilai(85);
echo "Nilai " . $siswa1->nama . ": " . $siswa1->getNilai() . "\n";
echo "Rata-rata nilai: " . $siswa1->hitungRataRata(80, 85, 90) . "\n";

