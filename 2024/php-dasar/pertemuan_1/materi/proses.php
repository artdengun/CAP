
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $email = $_POST["email"];

        // Validasi nama
        if (empty($nama)) {
            echo "Nama harus diisi.<br>";
        } elseif (strlen($nama) < 3) {
            echo "Nama minimal 3 karakter.<br>";
        }

        // Validasi email
        if (empty($email)) {
            echo "Email harus diisi.<br>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Format email tidak valid.<br>";
        }
        // Jika tidak ada error, proses data
        if (empty($error)) {
            echo "Data berhasil dikirim!";
        }
    }
    ?>