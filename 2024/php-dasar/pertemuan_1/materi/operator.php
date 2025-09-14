<?php

// Operator Aritmatika
$a = 10;
$b = 3;

$p = true;
$q = false;

// Operator Penugasan
$x = 5;

echo "=========================================================\n";
echo "Aritmatika:\n";
echo "a + b = " . ($a + $b) . "\n";  // Penjumlahan
echo "a - b = " . ($a - $b) . "\n";  // Pengurangan
echo "a * b = " . ($a * $b) . "\n";  // Perkalian
echo "a / b = " . ($a / $b) . "\n";  // Pembagian
echo "a % b = " . ($a % $b) . "\n";  // Modulus (sisa pembagian)
echo "a ** b = " . ($a ** $b) . "\n";  // Pangkat
echo "=========================================================\n";
echo "Perbandingan:\n";
echo "a == b: " . var_export($a == $b, true) . "\n";  // Sama dengan
echo "a === b: " . var_export($a === $b, true) . "\n";  // Identik
echo "a != b: " . var_export($a != $b, true) . "\n";  // Tidak sama dengan
echo "a <> b: " . var_export($a <> $b, true) . "\n";  // Tidak sama dengan (alternatif)
echo "a !== b: " . var_export($a !== $b, true) . "\n";  // Tidak identik
echo "a < b: " . var_export($a < $b, true) . "\n";  // Kurang dari
echo "a > b: " . var_export($a > $b, true) . "\n";  // Lebih dari
echo "a <= b: " . var_export($a <= $b, true) . "\n";  // Kurang dari atau sama dengan
echo "a >= b: " . var_export($a >= $b, true) . "\n";  // Lebih dari atau sama dengan
echo "=========================================================\n";
echo "Logika:\n";
echo "p && q: " . var_export($p && $q, true) . "\n";  // AND
echo "p || q: " . var_export($p || $q, true) . "\n";  // OR
echo "!p: " . var_export(!$p, true) . "\n";  // NOT
echo "=========================================================\n";
echo "Penugasan:\n";
echo "x += 5: " . $x += 3;  // Sama dengan $x = $x + 5
echo "x -= 3: " . $x -= 2;  // Sama dengan $x = $x - 3
echo "x *= 2: " . $x *= 4;  // Sama dengan $x = $x * 4
echo "x /= 4: " . $x /= 3;  // Sama dengan $x = $x / 4
echo "x %= 3: " . $x %= 5;  // Sama dengan $x = $x % 3

?>

