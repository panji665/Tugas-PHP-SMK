<?php 

    // Membuat Variable
    $tulisan = "Saya Belajar php";

    // Menampilkan Variable
    echo $tulisan;

    echo "<br>";
    
    $angka = "2203";
    
    echo "Tahun ".$angka;
    echo "<br>";
    
    var_dump($tulisan);
    echo "<br>";

    // Mengganti Jenis Nilai
    // Sebelum
    var_dump($angka);
    // Sesudah
    var_dump((int)$angka);
