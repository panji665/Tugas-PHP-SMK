<?php

require_once("../function.php");

// $kategori = "Es Jus";
// $id = 12;

$SQL = "SELECT * FROM tblkategori WHERE idkategori = $id";
// $SQL = "UPDATE tblkategori SET kategori = '$kategori' WHERE idkategori = $id";

$result = mysqli_query($koneksi, $SQL);
$row = mysqli_fetch_assoc($result);

// echo $row["kategori"];

?>

<form action="" method="post">
    kategori :
    <input type="text" name="kategori" value="<?php echo $row['kategori'] ?>" id="">
    <input type="submit" value="simpan" name="simpan">
</form>

<?php

if (isset($_POST["simpan"])) {
    $kategori = $_POST["kategori"];

    $SQL = "UPDATE tblkategori SET kategori = '$kategori' WHERE idkategori = $id";

    $result = mysqli_query($koneksi, $SQL);

    header("location:http://localhost/TugasYoutube/PHP%20SMK%2017-22/kategori/select.php");
}

?>