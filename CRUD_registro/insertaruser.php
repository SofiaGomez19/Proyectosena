<?php

include("connection.php");
$con = connection();

$usuario = $_POST['usuario'];
$correo = $_POST['correo_electronico'];
$contrasena = $_POST['contrasena'];
$confirmar_contrasena = $_POST['confirmar_contrasena'];

$sql = "INSERT INTO registro 
        (usuario, correo_electronico, contrasena, confirmar_contrasena)
        VALUES ('$usuario', '$correo', '$contrasena', '$confirmar_contrasena')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: index.php?mensaje=guardado");
    exit();
} else {
    header("Location: index.php?mensaje=error");
    exit();
}

?>
