<?php

function connection(){

    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "zybyng";

    $connect = mysqli_connect($host, $user, $pass);

    if (!$connect) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    mysqli_select_db($connect, $bd);

    return $connect;
}

?>
