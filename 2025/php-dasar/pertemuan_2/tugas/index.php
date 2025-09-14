<?php
namespace tugas;

require_once "perpustakaan.php";
require_once "buku.php";
require_once "buku_pelajaran.php";
require_once "anggota.php";

$perpustakaan = new perpustakaan();
$buku1 = new buku("Buku A", "Penulis A", "123456");
$buku2 = new buku_pelajaran("Buku B", "Penulis B", "654321", "Matematika");
$perpustakaan->tambahBuku($buku1);
$perpustakaan->tambahBuku($buku2);

$anggota1 = new Anggota("Anggota 1", "001");
$perpustakaan->daftarAnggotaBaru($anggota1);
$perpustakaan->pinjamBuku("001", "123456");
$perpustakaan->kembalikanBuku("001", "123456");

echo $perpustakaan;
?>
