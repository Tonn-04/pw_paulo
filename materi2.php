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