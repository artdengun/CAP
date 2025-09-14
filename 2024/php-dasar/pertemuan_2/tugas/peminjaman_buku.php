<?php
namespace tugas;

interface peminjaman_buku{
    public function pinjamBuku(Buku $buku);
    public function kembalikanBuku(Buku $buku);
}

?>
