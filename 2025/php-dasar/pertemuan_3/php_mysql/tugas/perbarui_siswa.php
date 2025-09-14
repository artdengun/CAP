<?php
include 'koneksi_db.php';
global $conn;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $kelas = $_POST['kelas'];
    $mata_pelajaran_id = $_POST['mata_pelajaran_id'];
    $sql = "UPDATE siswa SET nama='$nama', usia=$usia, kelas='$kelas', mata_pelajaran_id=$mata_pelajaran_id WHERE id=$id";
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
    ID: <input type="number" name="id"><br><br>
    Nama: <input type="text" name="nama"><br><br>
    Usia: <input type="number" name="usia"><br><br>
    Kelas: <input type="text" name="kelas"><br><br>
    Mata Pelajaran:
    <select name="mata_pelajaran_id">
        <?php
        include 'koneksi_db.php';
        global $conn;

        $query = "SELECT id, nama_pelajaran FROM mata_pelajaran";
        $result = $conn->query($query);
        while($row = $result->fetch_assoc()) {
            echo "<option value='".$row["id"]."'>".$row["nama_pelajaran"]."</option>";
        }
        ?>
    </select><br><br>
    <input type="submit" value="Perbarui">
    <button ><a href="index.php">Kembali</a></button>

</form>