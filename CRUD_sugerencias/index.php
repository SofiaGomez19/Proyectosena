<?php

include("connection.php");

$con = connection();

$sql = "SELECT * FROM sugerencias";

$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">

    <title>CRUD Sugerencias</title>

</head>

<body>

    <h1>CRUD de Sugerencias</h1>


    <!-- FORMULARIO PARA CREAR SUGERENCIA -->

    <div class="sugerencia-form">

        <h2>Agregar sugerencia</h2>

        <form action="insertar.php" method="POST">

            <input
                type="text"
                name="nombre"
                placeholder="Nombre"
                required
            >

            <input
                type="email"
                name="correo"
                placeholder="Correo electrónico"
                required
            >

            <textarea
                name="sugerencia"
                placeholder="Escribe tu sugerencia"
                rows="5"
                required
            ></textarea>

            <button type="submit">
                Guardar sugerencia
            </button>

        </form>

    </div>


    <!-- TABLA DE SUGERENCIAS -->

    <h2>Sugerencias registradas</h2>

    <table border="1">

        <thead>

            <tr>

                <th>ID</th>

                <th>Nombre</th>

                <th>Correo</th>

                <th>Sugerencia</th>

                <th>Acciones</th>

            </tr>

        </thead>


        <tbody>

            <?php while ($row = mysqli_fetch_array($query)) : ?>

                <tr>

                    <td>
                        <?= $row['id_sugerencia'] ?>
                    </td>

                    <td>
                        <?= $row['nombre'] ?>
                    </td>

                    <td>
                        <?= $row['correo'] ?>
                    </td>

                    <td>
                        <?= $row['sugerencia'] ?>
                    </td>

                    <td>

                        <a href="edit.php?id=<?= $row['id_sugerencia'] ?>">
                            Editar
                        </a>

                        |

                        <a
                            href="delete.php?id=<?= $row['id_sugerencia'] ?>"
                            onclick="return confirm('¿Desea eliminar esta sugerencia?')"
                        >
                            Eliminar
                        </a>

                    </td>

                </tr>

            <?php endwhile; ?>

        </tbody>

    </table>

</body>

</html>
