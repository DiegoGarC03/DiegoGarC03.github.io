<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db_name = "db_connect";

    $con=mysqli_connect($host, $user, $password, $db_name);
    if(mysqli_connect_errno()){
        die("Error al conectar a MySQL: ". mysqli_connect_error());
    }
?>