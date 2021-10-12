<?php 

    // Fungsi Tanpa Parameter
    function belajar() {
        echo "Belajar php";
    }

    // Fungsi Dengan Parameter
    function luas_persegi($p = 3, $l = 2) {
        $luas = $p * $l;
    
        echo $luas;
    }

    function luas($p = 5, $l = 3) {
        $luas = $p * $l;
        return $luas;
    }

    // Fungsi Dengan Kembalian Nilai
    function output() {
        return "Belajar Function";
    }

    echo luas(50,5) * 5;
