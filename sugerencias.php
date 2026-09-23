<?php

$conexion = new mysqli("localhost", "root", "", "zybyng");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$sugerencia = $_POST['sugerencia'];


$sql_id = "SELECT MAX(id_sugerencia) AS ultimo_id FROM sugerencias";
$resultado_id = $conexion->query($sql_id);

$fila = $resultado_id->fetch_assoc();

if ($fila['ultimo_id'] === null) {
    $id_sugerencia = 1;
} else {
    $id_sugerencia = $fila['ultimo_id'] + 1;
}


$sql = "INSERT INTO sugerencias
        (id_sugerencia, nombre, correo, sugerencia)
        VALUES (?, ?, ?, ?)";

$stmt = $conexion->prepare($sql);

$stmt->bind_param(
    "isss",
    $id_sugerencia,
    $nombre,
    $correo,
    $sugerencia
);

if ($stmt->execute()) {
    echo "Sugerencia enviada correctamente.";
} else {
    echo "Error al guardar la sugerencia: " . $stmt->error;
}

$stmt->close();
$conexion->close();

?>