<?php
// Materi 3: Fungsi (Function)

// Contoh fungsi sederhana
function salam() {
    return "Halo, selamat belajar PHP!";
}

// Fungsi dengan parameter
function salamDenganNama($nama) {
    return "Halo, $nama! Selamat belajar PHP!";
}

// Fungsi dengan parameter default
function salamDefault($nama = "Mahasiswa") {
    return "Halo, $nama! Selamat belajar PHP!";
}

// Fungsi dengan return value
function tambah($a, $b) {
    return $a + $b;
}

// Fungsi dengan tipe return
function cekGenap($angka): bool {
    return $angka % 2 == 0;
}

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
?>

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