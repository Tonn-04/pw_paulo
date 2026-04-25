<?php
echo "hello word";

$nama = "paul";
$umur = 40;
$tinggi = 170.9;
$kelas = "TIA Smester 4";

echo "nama saya $nama, umur saya $umur, tinggi saya $tinggi, kelas saya $kelas";

echo "<br><br>===================================<br><br>";

// operator dan kondisi (if else)

$nilai1 = 10;
$nilai2 = 20;
$hasil = $nilai1 + $nilai2;

echo "hasil dari $nilai1 + $nilai2 = $hasil <br>";
if ($hasil > 20) {
    echo "Nilai penjumlahan lebih besar dari 20.<br>";
} elseif ($hasil == 20) {
    echo "Nilai penjumlahan sama dengan 20.<br>";
} else {
    echo "Nilai penjumlahan kurang dari 20.<br>";
}

// perkalian
$hasilperkalian = $nilai1 * $nilai2;
echo "hasil perkalian dari $nilai1 * $nilai2 = $hasilperkalian <br>";
if ($hasilperkalian > 100) {
    echo "Hasil perkalian lebih besar dari 100.<br>";
} else {
    echo "Hasil perkalian tidak lebih besar dari 100.<br>";
}

echo "<br>=========================================<br><br>";
// pengurangan
$hasilpengurangan = $nilai1 - $nilai2;
echo "hasil pengurangan dari $nilai1 - $nilai2 = $hasilpengurangan <br>";
if ($hasilpengurangan < 0) {
    echo "Hasil pengurangan bernilai negatif.<br>";
} else {
    echo "Hasil pengurangan bernilai positif atau nol.<br>";
}

// pembagian
$hasilpembagian = $nilai1 / $nilai2;
echo "hasil pembagian dari $nilai1 / $nilai2 = $hasilpembagian <br>";
if ($nilai2 != 0) {
    echo "Pembagian dapat dilakukan karena pembagi tidak nol.<br>";
} else {
    echo "Pembagian tidak bisa dilakukan karena pembagi nol.<br>";
}

//pengkondisian
$nilai = 85;
if ($nilai >= 90) {
    echo "Nilai A";
} elseif ($nilai >= 80) {
    echo "Nilai B";
} elseif ($nilai >= 70) {
    echo "Nilai C";
} elseif ($nilai >= 60) {
    echo "Nilai D";
} else {
    echo "Nilai E";
}

// bilangan genap dan ganjil sesuai input pengguna
$batas = isset($_GET['batas']) ? intval($_GET['batas']) : 20;
if ($batas < 1) {
    $batas = 1;
}

echo "<br><br>=========================================<br><br>";
echo "Bilangan genap dari 1 sampai $batas:<br>";
for ($i = 2; $i <= $batas; $i += 2) {
    echo "$i ";
}

echo "<br>Bilangan ganjil dari 1 sampai $batas:<br>";
for ($i = 1; $i <= $batas; $i += 2) {
    echo "$i ";
}

echo "<br>";







?>