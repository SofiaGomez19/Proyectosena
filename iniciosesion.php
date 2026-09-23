<?php

$conexion = new mysqli("localhost", "root", "", "zybyng");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

/* Buscar el usuario */
$sql = "SELECT id_usuario, correo_electronico, contrasena 
        FROM registro 
        WHERE correo_electronico = ? 
        AND contrasena = ?";

$stmt = $conexion->prepare($sql);

$stmt->bind_param("ss", $correo, $contrasena);

$stmt->execute();

$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {

    $usuario = $resultado->fetch_assoc();

    $id_usuario = $usuario['id_usuario'];

    /* Registrar el inicio de sesión */
    $sql_inicio = "INSERT INTO iniciosesion 
                   (id_usuario, correo_electronico, contrasena)
                   VALUES (?, ?, ?)";

    $stmt_inicio = $conexion->prepare($sql_inicio);

    $stmt_inicio->bind_param(
        "iss",
        $id_usuario,
        $correo,
        $contrasena
    );

    if ($stmt_inicio->execute()) {
        echo "Inicio de sesión correcto.<br>";
        echo "Bienvenido.";
    } else {
        echo "El usuario es correcto, pero no se pudo registrar el inicio de sesión.";
    }

    $stmt_inicio->close();

} else {

    echo "Correo o contraseña incorrectos.";

}

$stmt->close();
$conexion->close();

?>