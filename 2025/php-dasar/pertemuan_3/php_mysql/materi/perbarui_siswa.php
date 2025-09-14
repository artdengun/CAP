<?php
include 'koneksi_db.php';
global $conn;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $kelas = $_POST['kelas'];
    $sql = "UPDATE siswa SET nama='$nama', usia=$usia, kelas
='$kelas' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Data siswa berhasil diperbarui";
    } else {
        echo "Error memperbarui data: " . $conn->error;
    }
}
$conn->close();
?>

    <h2>Perbarui Data Siswa</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
ID: <input type="number" name="id"><br>
Nama: <input type="text" name="nama"><br>
Usia: <input type="number" name="usia"><br>
Kelas: <input type="text" name="kelas"><br>
<input type="submit" value="Perbarui">
</form>
