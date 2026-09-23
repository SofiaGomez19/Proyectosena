<?php

include("connection.php");
$con = connection();

$id = $_POST['id_sugerencia'];

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$sugerencia = $_POST['sugerencia'];

$sql = "UPDATE sugerencias SET
        nombre='$nombre',
        correo='$correo',
        sugerencia='$sugerencia'
        WHERE id_sugerencia='$id'";

$query = mysqli_query($con, $sql);

if ($query) {

    header("Location: index.php?mensaje=actualizado");
    exit();

} else {

    echo "Error al actualizar la sugerencia: " . mysqli_error($con);

}

?>