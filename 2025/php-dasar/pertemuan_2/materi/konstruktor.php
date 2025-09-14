<?php
class Buku {
    public $judul;
    public $penulis;
    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        echo "buku '{$this->judul}' telah dibuat.\n";
    }
    public function __destruct() {
        echo "buku '{$this->judul}' telah dihapus dari memori.\n";
    }
}
$buku1 = new Buku("Harry Potter", "J.K. Rowling");
echo "Judul: " . $buku1->judul . ", Penulis: " . $buku1->penulis . "\n";
?>
