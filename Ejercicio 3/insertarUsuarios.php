<!DOCTYPE html5>
<html lang="es_ES">
    <head>
        <meta name="description" content="insertar datos">
        <meta name="author" content="rubén">
        <meta name="keywords" content="joder">
        <meta charset="UTF-8">
        <title>Insertar usuarios</title>
    </head>

    <body>
        <?php

            $conexionBD = mysqli_connect("localhost", "root", "", "taller")
            or die("Error al conectarse a la base de datos.");

            if (!$_POST) {

        ?>

        <form action="insertarUsuarios.php" method="POST">
            <table>
                <tr>
                    <td>Usuario a insertar: </td>
                    <td><input type="text" name="usuario"/></td>
                </tr>
                <tr>
                    <td>Contraseña: </td>
                    <td><input type="password" name="pass"/></td>
                </tr>
                <tr>
                    <td>Tipo de usuario: </td>
                    <td>
                        <select name="tipo">
                            <option value="restringido">Restringido</option>
                            <option value="admin">Administrador</option>
                        </select>
                    </td>
                    <tr colspan="2">
                        <td><input type="submit" value="Insertar"/></td>
                    </tr>
                </tr>
            </table>
        </form>
        <?php
            } else {

                $passEncrypt = password_hash($_POST['pass'], PASSWORD_DEFAULT);

                $sql = 'INSERT INTO usuarios (usuario, pass, tipo_usuario) VALUES("'.$_POST['usuario'].'", "'.$passEncrypt.'", "'.$_POST['tipo'].'")';

                if ($conexionBD -> query($sql) == TRUE) {
        ?>
                    <p>Usuario insertado</p>
        <?php                    
                } else {
        ?>
                    <p>Error al insertar datos.</p>
                    <p><?=$conexionBD -> error ?></p>
        <?php
                }

            }
        ?>
    </body>
</html>