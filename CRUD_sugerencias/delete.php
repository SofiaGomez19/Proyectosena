<?php

include("connection.php");
$con = connection();

$id = $_GET['id'];

$sql = "DELETE FROM sugerencias WHERE id_sugerencia='$id'";

$query = mysqli_query($con, $sql);

if ($query) {

    header("Location: index.php?mensaje=eliminado");
    exit();

} else {

    echo "Error al eliminar la sugerencia: " . mysqli_error($con);

}

?>
