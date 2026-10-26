<?php
// Menampilkan pesan
$pesan = "Selamat belajar PHP!";
echo "Halo, " . $pesan;
echo "<br>";

// Menampilkan data array
$mobil = array("Toyota", "Yamaha", "Honda");
echo $mobil[2] . "<br>";

// Operasi penjumlahan
$a = 10;
$b = 5;
$a = $a + $b;
echo $a . "<br>";

// Penjumlahan singkat
$a += $b;
echo $a . "<br>";

// Menggabungkan angka menjadi teks
$a = $a . $b;
echo $a . "<br>";

// Menggabungkan teks secara singkat
$a .= $b;
echo $a;
?>