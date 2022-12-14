<?php

if(isset($_POST['submit'])){
    $txtNombre = $_POST['$txtNombre'];
    $txtPaterno = $_POST['$txtPaterno'];
    $txtMaterno = $_POST['$txtMaterno'];
    $txtCurp = $_POST['$txtCurp'];
    $txtEdad = $_POST['$txtEdad'];
    $txtUsuario = $_POST['$txtUsuario'];
    $txtContrasena = $_POST['$txtContrasena'];
    $txtEmail = $_POST['$txtEmail'];
    $txtRespuesta = $_POST['$txtRespuesta'];
}

$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_connect";

$con = mysqli_connect($host,$username,$password,$dbname);

if(!$con){
    die("La conexión falló!" . mysqli_connect_error());
}

$sql = "INSERT INTO 'registroAlumno' ('id_registro','nombre','ap_paterno','ap_materno','curp','edad','usuario','contrasena','email','res_seguridad','rol') 
VALUES ('0','$txtNombre','$txtPaterno','$txtMaterno','$txtCurp','$txtEdad','$txtUsuario','$txtContrasena','$txtEmail','$txtRespuesta','1')";

$rs = mysqli_query($con,$sql);

if($rs){
    echo "Datos de usuario registrados.";
}

header("Location: /home.html");

?>