<?php

include("connection.php");
$con = connection();

$id = $_GET["id"];

$sql = "DELETE FROM registro WHERE id_usuario='$id'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: index.php?mensaje=eliminado");
    exit();
} else {
    echo "Error al eliminar el usuario.";
}

?>