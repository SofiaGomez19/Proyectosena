<?php

$conexion = new mysqli("localhost", "root", "", "zybyng");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$usuario = $_POST['usuario'];
$correo = $_POST['correo_electronico'];
$contrasena = $_POST['contrasena'];
$confirmar = $_POST['confirmar_contrasena'];

if ($contrasena !== $confirmar) {
    die("Las contraseñas no coinciden.");
}

$sql = "INSERT INTO registro 
        (usuario, correo_electronico, contrasena, confirmar_contrasena)
        VALUES (?, ?, ?, ?)";

$stmt = $conexion->prepare($sql);

$stmt->bind_param(
    "ssss",
    $usuario,
    $correo,
    $contrasena,
    $confirmar
);

if ($stmt->execute()) {
    echo "Usuario registrado correctamente.";
} else {
    echo "Error al registrar el usuario: " . $stmt->error;
}

$stmt->close();
$conexion->close();

?>