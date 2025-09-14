<?php

include 'koneksi_db.php';
global $conn;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $kelas = $_POST['kelas'];
    $sql = "INSERT INTO siswa (nama, usia, kelas) VALUES ('$nama', $usia, '$kelas')";
    if ($conn->query($sql) === TRUE) {
        echo "siswa baru berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>

    <h2>Tambah Siswa Baru</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Nama: <input type="text" name="nama"><br>
Usia: <input type="number" name="usia"><br>
Kelas: <input type="text" name="kelas"><br>
<input type="submit" value="Tambah">
</form>
