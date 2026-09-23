<?php 
    include("connection.php");
    $con = connection();

    $id = $_GET['id'];

    $sql = "SELECT * FROM registro WHERE id_usuario='$id'";
    $query = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="CSS/style.css" rel="stylesheet">

    <title>Editar usuario</title>
</head>

<script>
function actualizar(){
    var respuesta = confirm("¿Realmente desea actualizar el registro?");

    if(respuesta == true){
        return true;
    } else {
        return false;
    }
}
</script>

<body>

    <div class="users-form">

        <h1>Editar usuario</h1>

        <form action="edit_user.php" method="POST" onsubmit="return actualizar();">

            <input 
                type="hidden" 
                name="id_usuario" 
                value="<?= $row['id_usuario'] ?>"
            >

            <input 
                type="text" 
                name="usuario" 
                placeholder="Usuario"
                value="<?= $row['usuario'] ?>"
                required
            >

            <input 
                type="email" 
                name="correo_electronico" 
                placeholder="Correo electrónico"
                value="<?= $row['correo_electronico'] ?>"
                required
            >

            <input 
                type="text" 
                name="contrasena" 
                placeholder="Contraseña"
                value="<?= $row['contrasena'] ?>"
                required
            >

            <input 
                type="text" 
                name="confirmar_contrasena" 
                placeholder="Confirmar contraseña"
                value="<?= $row['confirmar_contrasena'] ?>"
                required
            >

            <input type="submit" value="Actualizar">

        </form>

    </div>

</body>
</html>
