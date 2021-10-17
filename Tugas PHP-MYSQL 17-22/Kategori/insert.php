<form action="" method="post">
    Kategori :
    <input type="text" name="kategori" id="">
    <input type="submit" value="Simpan" name="simpan">
</form>

<?php

require_once("../function.php");

if (isset($_POST["simpan"])) {
    $kategori = $_POST["kategori"];

    $SQL = "INSERT INTO tblkategori VALUES ('', '$kategori')";

    $result = mysqli_query($koneksi, $SQL);

    header("location:http://localhost/TugasYoutube/PHP%20SMK%2017-22/kategori/select.php");
}


?>