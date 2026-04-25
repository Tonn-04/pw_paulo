<<<<<<< HEAD
<form method="post">
    Masukan angka : <input type="number" name="angka"><br>
    <input type ="submit" Value ="kirim">
</form>

<?php
if(isset($_POST['angka'])){

    $data = $_POST['angka'];
    for($i=1; $i<=$data; $i++){
        echo "angka ke $i <br>";
    }
}
?>

//Looping While dan Do While

<?php
echo "<br> Ini Perulangan While <br>";
if (isset($_POST['angka'])) {
    $data = $_POST['angka'];
    $i = 1;
    while ($i <= $data) {
        echo "Angka: $i <br>";
        $i++;
    }
}
?>

<?php
echo "<br> Ini Perulangan Do While <br>";
if (isset($_POST['angka'])) {
    $data = $_POST['angka'];
    $i = 1;
    do {
        echo "Angka: $i <br>";
        $i++;
    } while ($i <= $data);
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

=======
<form method="post">
    Masukan angka : <input type="number" name="angka"><br>
    <input type ="submit" Value ="kirim">
</form>

<?php
if(isset($_POST['angka'])){

    $data = $_POST['angka'];
    for($i=1; $i<=$data; $i++){
        echo "angka ke $i <br>";
    }
}
>>>>>>> d25a93798e79585ce40ca389bd033e1dab194d13
