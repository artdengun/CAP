<?php
global $conn;
include 'koneksi_db.php';
$sql = "SELECT id, nama, usia, kelas FROM siswa";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Nama</th><th>U
sia</th><th>Kelas</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["nama"]."
</td><td>".$row["usia"]."</td><td>".$row["kelas"]."</td></tr
>";
    }
    echo "</table>";
} else {
    echo "0 hasil";
}
$conn->close();
?>

