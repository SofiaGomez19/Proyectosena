<?php

include("connection.php");
$con = connection();

$id_usuario = $_POST["id_usuario"];

$usuario = $_POST["usuario"];
$correo = $_POST["correo_electronico"];
$contrasena = $_POST["contrasena"];
$confirmar_contrasena = $_POST["confirmar_contrasena"];

$sql = "UPDATE registro SET 
        usuario='$usuario',
        correo_electronico='$correo',
        contrasena='$contrasena',
        confirmar_contrasena='$confirmar_contrasena'
        WHERE id_usuario='$id_usuario'";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: index.php?mensaje=actualizado");
    exit();
} else {
    echo "Error al actualizar el usuario: " . mysqli_error($con);
}

?>
