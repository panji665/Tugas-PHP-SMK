<?php 

    require_once("../function.php");

    $SQL = "DELETE FROM tblkategori WHERE idkategori = $id";

    $result = mysqli_query($koneksi, $SQL);

    header("location:http://localhost/TugasYoutube/PHP%20SMK%2017-22/kategori/select.php");
