<?php
global $conn;

include 'koneksi_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $sql = "DELETE FROM siswa WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Data siswa berhasil dihapus";
    } else {
        echo "Error menghapus data: " . $conn->error;
    }
}
$conn->close();
?>

    <h2>Hapus Siswa</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    ID: <input type="number" name="id"><br>
<input type="submit" value="Hapus">
</form>
