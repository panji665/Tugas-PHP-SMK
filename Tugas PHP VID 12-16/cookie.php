<?php 

    $cookie_name = "user";
    $cookie_value = "Anos voldigod";

    setcookie($cookie_name, $cookie_value);

    $cookie_value = "Rimuru tempest";

    setcookie($cookie_name, $cookie_value);

    echo $_COOKIE[$cookie_name];

    setcookie("user", "", time() - 3600);

    echo "<br>";

    var_dump($_COOKIE);

?>