<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI</title>
</head>
<body>
    <h2>Kalkulator BMI</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="weight">Berat (kg):</label>
        <input type="text" id="weight" name="weight" required><br><br>
        
        <label for="height">Tinggi (cm):</label>
        <input type="text" id="height" name="height" required><br><br>
        
        <input type="submit" value="Hitung BMI">
    </form>

    <?php
    // Proses penghitungan BMI jika form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $weight = $_POST['weight'];
        $height = $_POST['height'] / 100; // Convert tinggi dari cm ke meter
        
        // Hitung BMI
        $bmi = $weight / ($height * $height);
        
        // Tampilkan hasil BMI
        echo "<h3>Hasil Perhitungan BMI:</h3>";
        echo "Berat Anda: " . $weight . " kg<br>";
        echo "Tinggi Anda: " . $_POST['height'] . " cm<br>";
        echo "BMI Anda: " . number_format($bmi, 1) . "<br><br>";

        // Evaluasi kategori BMI
        if ($bmi < 18.5) {
            echo "Anda termasuk dalam kategori: Kurang berat badan";
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            echo "Anda termasuk dalam kategori: Normal (ideal)";
        } elseif ($bmi >= 24.9 && $bmi < 29.9) {
            echo "Anda termasuk dalam kategori: Kelebihan berat badan";
        } else {
            echo "Anda termasuk dalam kategori: Obesitas";
        }
    }
    ?>
</body>
</html>
