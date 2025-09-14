<?php
include 'koneksi_db.php';
global $conn;

$search = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = $_POST['search'];
}

$sql = "SELECT siswa.id, siswa.nama, siswa.usia, siswa.kelas, mata_pelajaran.nama_pelajaran 
        FROM siswa 
        LEFT JOIN mata_pelajaran ON siswa.mata_pelajaran_id = mata_pelajaran.id";

if (!empty($search)) {
    $sql .= " WHERE siswa.nama LIKE '%" . $conn->real_escape_string($search) . "%'";
}

$sql .= " ORDER BY siswa.usia DESC";

$result = $conn->query($sql);
?>

<h2>Cari Siswa</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Nama: <input type="text" name="search" value="<?php echo htmlspecialchars($search); ?>"><br><br>
    <input type="submit" value="Cari">
    <button ><a href="index.php">Kembali</a></button>
</form>

<?php
if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Nama</th><th>Usia</th><th>Kelas</th><th>Mata Pelajaran</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["nama"]."</td><td>".$row["usia"]."</td><td>".$row["kelas"]."</td><td>".$row["nama_pelajaran"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 hasil";
}
$conn->close();
?>
