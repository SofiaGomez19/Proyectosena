<?php

include("connection.php");
$con = connection();

$sql = "SELECT * FROM registro";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="CSS/style.css" rel="stylesheet">

    <title>CRUD Registro</title>

</head>

<script>

function eliminar(){

    var respuesta = confirm("¿Realmente desea eliminar este registro?");

    if(respuesta == true){
        return true;
    }else{
        return false;
    }

}

</script>

<script>

function agregar(){

    return confirm("¿Desea guardar este usuario?");

}

</script>


<body>

    <div class="users-form">

        <h1>Crear usuario</h1>

        <form action="insertaruser.php" method="POST" onsubmit="return agregar();">

            <input
                type="text"
                name="usuario"
                placeholder="Usuario"
                required
            >

            <input
                type="email"
                name="correo_electronico"
                placeholder="Correo electrónico"
                required
            >

            <input
                type="password"
                name="contrasena"
                placeholder="Contraseña"
                required
            >

            <input
                type="password"
                name="confirmar_contrasena"
                placeholder="Confirmar contraseña"
                required
            >

            <input
                type="submit"
                value="Agregar"
            >

        </form>

    </div>


    <div class="users-table">

        <h2>Usuarios registrados</h2>

        <table>

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>Confirmar contraseña</th>
                    <th>Acciones</th>

                </tr>

            </thead>


            <tbody>

                <?php while ($row = mysqli_fetch_array($query)) : ?>

                    <tr>

                        <th>
                            <?= $row['id_usuario'] ?>
                        </th>

                        <th>
                            <?= $row['usuario'] ?>
                        </th>

                        <th>
                            <?= $row['correo_electronico'] ?>
                        </th>

                        <th>
                            <?= $row['contrasena'] ?>
                        </th>

                        <th>
                            <?= $row['confirmar_contrasena'] ?>
                        </th>

                        <th>

                            <a
                                href="update.php?id=<?= $row['id_usuario'] ?>"
                                class="users-table--edit"
                            >
                                Editar
                            </a>

                            <a
                                href="delete_user.php?id=<?= $row['id_usuario'] ?>"
                                class="users-table--delete"
                                onclick="return eliminar()"
                            >
                                Eliminar
                            </a>

                        </th>

                    </tr>

                <?php endwhile; ?>

            </tbody>

        </table>

    </div>

</body>

</html>
