<?php
// Deklarasi variabel
$x = 85;
$y = 65;

// Logika percabangan
if ($x >= 75 || $y >= 80) {
    echo "Siswa dinyatakan lulus <br>";
} elseif ($x >= 60) {
    echo "Siswa perlu mengikuti remedial <br>";
} else {
    echo "Siswa belum lulus <br>";
}

// Menampilkan pesan akhir
echo "Proses penilaian selesai";
?>