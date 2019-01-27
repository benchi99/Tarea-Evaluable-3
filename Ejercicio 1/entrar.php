<!DOCTYPE html5>
<html lang="es_ES">
    <head>
        <meta name="description" content="inicio sesión">
        <meta name="author" content="Rubén Bermejo Romero">
        <meta name="keywords" content="iniciar sesiones php">
        <meta charset="UTF-8">
        <title>Inicio de Sesión</title>
        <style>
            .error {
                color: red;
            }
        </style>
    </head>

    <body>
        <form action="valida.php" method="POST">
            <table align="center">
                <tr colspan="2">
                    <td><h2 align="center">Iniciar sesión en Talleres</h2></td>
                </tr>
                <tr>
                    <td>Usuario: </td>
                    <td><input type="text" name="usuario"/></td>
                </tr>
                <tr>
                    <td>Contraseña: </td>
                    <td><input type="password" name="pass"/></td>
                </tr>
                <tr colspan="2">
                    <td><input type="submit" value="Iniciar sesión"/></td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($errores['cred'])) {
            echo '<p class="error">'.$errores['cred'].'</p>';
        }
        ?>        
    </body>
</html>