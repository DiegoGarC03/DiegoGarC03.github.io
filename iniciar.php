<?php
    include('conexion.php');
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($con,$username);
    $username = mysqli_real_escape_string($con,$password);

    $sql = "select * from alumno where usuario = '$username' or email '$username' and password = '$password'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1){
        header("Location:/home.html");
    }
    else{
        echo '<script type="text/javascript">
            window.onload = function() { alert("Usuario o contraseña no váldios.");}
        </script>';
    }
?>