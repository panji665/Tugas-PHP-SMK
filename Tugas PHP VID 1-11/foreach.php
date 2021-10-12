<?php 

// $nama = array("itsuka","yotsuba","taka","rimuru",100);

// var_dump($nama);

// echo '<br>';

// foreach ($nama as $key => $value) {
//     echo $key . '<br>';
// }

$nama = array(
    "itsuka" => "jogja",
    "yotsuba" => "surabaya",
    "taka" => "palembang",
    "rimuru" => "sidoarjo");

var_dump($nama);
echo '<br>'; 
foreach ($nama as $key => $value) {
echo $key . '-' . $value . '<br>';
}
