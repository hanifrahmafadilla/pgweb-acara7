<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabel Penduduk - PHP</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 4px 8px;
        }
        th {
            text-align: left;
        }
        .text-right {
            text-align: right;
        }
    </style>
</head>
<body>

<?php
// 1. Menyimpan data ke dalam Array Multidimensi
$data_penduduk = [
    ["kecamatan" => "Moyudan", "luas" => 27.62, "jumlah_penduduk" => 31497],
    ["kecamatan" => "Minggir", "luas" => 27.27, "jumlah_penduduk" => 29886],
    ["kecamatan" => "Seyegan", "luas" => 26.63, "jumlah_penduduk" => 47129],
    ["kecamatan" => "Godean",  "luas" => 26.84, "jumlah_penduduk" => 72028],
    ["kecamatan" => "Gamping", "luas" => 29.25, "jumlah_penduduk" => 108675]
];
?>

<!-- 2. Menampilkan tabel HTML menggunakan PHP -->
<table>
    <tr>
        <th>kecamatan</th>
        <th>luas</th>
        <th>jumlah_penduduk</th>
    </tr>

    <?php
    // 3. Iterasi / Perulangan untuk menampilkan setiap baris data
    foreach ($data_penduduk as $row) {
        echo "<tr>";
        echo "<td>" . $row['kecamatan'] . "</td>";
        echo "<td>" . $row['luas'] . "</td>";
        echo "<td class='text-right'>" . $row['jumlah_penduduk'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>