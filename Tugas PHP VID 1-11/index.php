<?php

// $nama = array("itsuka","yotsuba","taka","rimuru",50,3.6);

// var_dump($nama);

// echo '<br>';


// echo '<br>';

// for ($i=0; $i < 7; $i++) { 
//     echo $i;
//     echo $nama[$i] . '<br>';
// }

// foreach ($nama as $key) {
//     echo $key . '<br>';
// }


$nama = array(
    "itsuka" => "jogja",
    "yotduba" => "surabaya",
    "taka" => "palembang",
    "rimuru" => "sidoarjo"
);

$nama["itsuka"] = "jogja";
$nama["yotsuba"] = "surabaya";
$nama["taka"] = "palembang";
$nama["rimuru"] = "sidoarjo";

var_dump($nama);

echo '<br>';

echo $nama["itsuka"];
echo '<br>';

foreach ($nama as $key => $value) {
    echo $key . " => " . $value;
    echo '<br>';
}
