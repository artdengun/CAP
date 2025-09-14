<?php

namespace tugas;

require_once "peminjaman_buku.php";

class anggota implements peminjaman_buku {
    private $nama;
    private $nomorAnggota;
    private $bukuDipinjam = array();

    public function __construct($nama, $nomorAnggota) {
        $this->nama = $nama;
        $this->nomorAnggota = $nomorAnggota;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getNomorAnggota() {
        return $this->nomorAnggota;
    }

    public function getBukuDipinjam() {
        return $this->bukuDipinjam;
    }

    public function pinjamBuku(Buku $buku) {
        $this->bukuDipinjam[] = $buku;
    }

    public function kembalikanBuku(Buku $buku) {
        foreach ($this->bukuDipinjam as $key => $b) {
            if ($b->getIsbn() == $buku->getIsbn()) {
                unset($this->bukuDipinjam[$key]);
                return true;
            }
        }
        return false;
    }
    public function __toString() {
        return "Nama: $this->nama, Nomor Anggota: $this->nomorAnggota";
    }
}
?>
