<?php 

    // Operator Matematika

    // Deklarasi Variable
    $a = 7;
    $b = 5;

    $tambah = $a + $b;
    echo $tambah;
    echo "<br>";
    
    $kurang = $a - $b;
    echo $kurang;
    echo "<br>";
    
    $kali = $a * $b;
    echo $kali;
    echo "<br>";

    $bagi = $a / $b;
    echo $bagi;
    echo "<br>";

    $modulus = $a % $b;
    echo $modulus;
    echo "<br>";
    
    // Operator Logika

    $less = $a < $b;
    echo $less;
    echo "<br>";

    $more = $a > $b;
    echo $more;
    echo "<br>";

    $same = $a == $b;
    echo $same;
    echo "<br>";

    $not_same = $a != $b;
    echo $not_same;
    echo "<br>";
    
    // Increment dan Decrement
    
    // Cara Pertama
    echo $a++;
    echo "<br>";
    
    // Cara Kedua
    $a++;
    echo $a;
    echo "<br>";

    // Operator String

    $kata = "Sura";
    $kota = "Baya";

    $hasil = $kata.$kota;
    $hasil .= "Kota Pahlawan";
    echo $hasil;
