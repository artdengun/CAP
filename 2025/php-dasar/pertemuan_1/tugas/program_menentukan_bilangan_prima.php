<?php
// Fungsi untuk menentukan apakah sebuah angka adalah bilangan prima atau bukan
function isPrime($number) {
    // Bilangan prima adalah bilangan lebih dari 1 yang hanya habis dibagi oleh 1 dan dirinya sendiri
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

// Contoh penggunaan fungsi
$angka = 17;
if (isPrime($angka)) {
    echo "$angka adalah bilangan prima.";
} else {
    echo "$angka bukan bilangan prima.";
}
?>
