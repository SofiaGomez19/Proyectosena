<?php

include("connection.php");
$con = connection();

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$sugerencia = $_POST['sugerencia'];

$sql = "INSERT INTO sugerencias 
        (nombre, correo, sugerencia)
        VALUES ('$nombre', '$correo', '$sugerencia')";

$query = mysqli_query($con, $sql);

if ($query) {

    header("Location: index.php?mensaje=guardado");
    exit();

} else {

    echo "Error al guardar la sugerencia: " . mysqli_error($con);

}

?>