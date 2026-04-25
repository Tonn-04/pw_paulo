<?php
// Floating button untuk kembali ke menu utama
echo '<a href="index.php" class="floating-btn" title="Kembali ke Menu">🏠</a>';

echo "<h1>" . salam() . "</h1>";
echo "<h2>" . salamDenganNama("Paulo") . "</h2>";
echo "<h3>" . salamDefault() . "</h3>";

echo "<hr>";
echo "<h2>Contoh Penggunaan Fungsi:</h2>";
echo "5 + 3 = " . tambah(5, 3) . "<br>";
echo "Apakah 4 genap? " . (cekGenap(4) ? "Ya" : "Tidak") . "<br>";
echo "Apakah 7 genap? " . (cekGenap(7) ? "Ya" : "Tidak") . "<br>";

// Definisi fungsi
function salam() {
    return "Selamat Datang di Materi Fungsi!";
}

function salamDenganNama($nama) {
    return "Halo, $nama!";
}

function salamDefault() {
    return "Halo, Pengguna!";
}

function tambah($a, $b) {
    return $a + $b;
}

function cekGenap($angka) {
    return $angka % 2 == 0;
}
?>

<!-- Floating Button -->
<a href="index.php" class="floating-btn" title="Kembali ke Menu">🏠</a>

<style>
.floating-btn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #4CAF50;
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    text-align: center;
    text-decoration: none;
    font-size: 24px;
    line-height: 50px;
    box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
    transition: transform 0.3s;
    z-index: 1000;
}

.floating-btn:hover {
    transform: scale(1.1);
    background-color: #45a049;
}
</style>