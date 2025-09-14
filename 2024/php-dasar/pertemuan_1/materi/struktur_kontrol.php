<?php 

$perbandingan = 10;

if ($perbandingan == 3) {
    echo "perbandingan";
} elseif ($perbandingan == 10) {

    echo "testing";
} else {
    echo "<br>";
    echo "tidak ada data yang digunakan";
}

$pembayaran = 5000;

switch ($pembayaran) {
    case $pembayaran < 5000:
        echo "<br>";
        echo "data pembayaran kurang dari 5000";
        break;
    case $pembayaran == 5000:
        echo "<br>";
        echo "data pembayaran adalah 5000";
        break;
    case $pembayaran != 5000:
        echo "<br>";
        echo "data tidak sama dengan 5000";
        break;
    default:
        echo "<br>";
        echo "tidak ada data yang digunakan";
}

?>