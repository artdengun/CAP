<?php

namespace tugas;


class buku{
    private $judul;
    private $penulis;
    private $isbn;

    public function __construct($judul, $penulis, $isbn)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->isbn = $isbn;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function __toString() {
        return "Judul: $this->judul, Penulis: $this->penulis, Nomor ISBN: $this->isbn";
    }
}

