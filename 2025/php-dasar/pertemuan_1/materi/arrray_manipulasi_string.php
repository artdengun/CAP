<?php
// ARRAY INDEKS
$buah = ["apel", "jeruk", "mangga"];
echo $buah[0]; // Output: apel

// ARRAY ASSOSIATIF 
$siswa = [
    "nama" => "Budi",
    "umur" => 16,
    "kelas" => "X IPA 1"
];
echo $siswa["nama"]; // Output: Budi

// ARRAY MULTIDIMENSI 
$nilai = [
    ["Budi", 85, 90, 78],
    ["Ani", 92, 88, 95],
    ["Citra", 78, 85, 80]
];
echo $nilai[1][2]; // Output: 88

/** fungsi fungsi array */ 
$buah = ["apel", "jeruk"];
array_push($buah, "mangga");
print_r($buah); // Output: Array ( [0] => apel [1] => jeruk [2] => mangga )

$buah1 = ["apel", "jeruk"];
$buah2 = ["mangga", "pisang"];
$semuaBuah = array_merge($buah1, $buah2);
print_r($semuaBuah); // Output: Array ( [0] => apel [1] => jeruk [2] => mangga [3] => pisang )

/** Manipulasi String */

$teks = "Halo, Dunia!";
echo substr($teks, 0, 4); // Output: Halo

$kalimat = "Saya suka apel";
echo str_replace("apel", "jeruk", $kalimat); // Output: Saya suka jeruk

$data = "apel,jeruk,mangga";
$buah = explode(",", $data);
print_r($buah); // Output: Array ( [0] => apel [1] => jeruk [2] => mangga )

$array = ["Halo", "Dunia", "PHP"];
echo implode(" ", $array); // Output: Halo Dunia PHP
?>