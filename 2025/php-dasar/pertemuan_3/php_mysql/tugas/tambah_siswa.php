<?php

include 'koneksi_db.php';
global $conn;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $kelas = $_POST['kelas'];
    $mata_pelajaran_id = $_POST['mata_pelajaran_id'];

    $kelas_valid = array('A', 'B', 'C', 'D', 'E');
    if (!in_array($kelas, $kelas_valid)) {
        echo "Error: Kelas tidak valid. Harap masukkan nilai A, B, C, D, atau E.";
    } else {
        $sql = "INSERT INTO siswa (nama, usia, kelas, mata_pelajaran_id) VALUES ('$nama', $usia, '$kelas', $mata_pelajaran_id)";
        if ($conn->query($sql) === TRUE) {
            echo "siswa baru berhasil ditambahkan";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
$conn->close();
?>
<h2>Tambah Siswa Baru</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
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
    <input type="submit" value="Tambah">
    <button ><a href="index.php">Kembali</a></button>
</form>