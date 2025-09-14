<?php
// Array asosiatif berisi informasi 5 teman (nama, umur, hobi)
$teman = array(
    array("nama" => "John", "umur" => 25, "hobi" => "Bermain musik"),
    array("nama" => "Jane", "umur" => 27, "hobi" => "Bersepeda"),
    array("nama" => "Alice", "umur" => 22, "hobi" => "Menulis"),
    array("nama" => "Bob", "umur" => 30, "hobi" => "Menggambar"),
    array("nama" => "Eve", "umur" => 29, "hobi" => "Memasak")
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Teman</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Informasi Teman</h2>
    <table>
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Hobi</th>
        </tr>
        <?php foreach ($teman as $t) { ?>
        <tr>
            <td><?php echo $t['nama']; ?></td>
            <td><?php echo $t['umur']; ?></td>
            <td><?php echo $t['hobi']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
