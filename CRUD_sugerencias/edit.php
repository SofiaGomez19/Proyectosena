<?php

include("connection.php");
$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM sugerencias WHERE id_sugerencia='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Editar sugerencia</title>

</head>

<body>

    <h1>Editar sugerencia</h1>

    <form action="actualizar.php" method="POST">

        <input
            type="hidden"
            name="id_sugerencia"
            value="<?= $row['id_sugerencia'] ?>"
        >

        <label>Nombre</label>

        <input
            type="text"
            name="nombre"
            value="<?= $row['nombre'] ?>"
            required
        >

        <br><br>

        <label>Correo</label>

        <input
            type="email"
            name="correo"
            value="<?= $row['correo'] ?>"
            required
        >

        <br><br>

        <label>Sugerencia</label>

        <br>

        <textarea
            name="sugerencia"
            rows="6"
            cols="50"
            required
        ><?= $row['sugerencia'] ?></textarea>

        <br><br>

        <button type="submit">
            Actualizar
        </button>

    </form>

    <br>

    <a href="index.php">
        Volver
    </a>

</body>

</html>