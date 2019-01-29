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
        
    <?php

        $error = 'no';

        if (isset($_GET['error'])) {
            if ($_GET['error'] == 1) {
                $error = 'Especifique usuario y contraseña.';
            } else if ($_GET['error'] == 2) {
                $error = 'Los datos introducidos son incorrectos. Vuelva a intentarlo.';
            }
        }
    ?>


    <body>
        <form action="valida.php" method="POST">
            <table align="center">      
                <tr colspan="2">
                    <td><h2 align="center">Iniciar sesión en Talleres</h2></td>
                </tr>
                <?php
                    if (isset($_GET['error'])){
                ?>  
                <tr colspan="2">
                    <td class="error"><?=$error?></td>
                </tr>
                <?php
                    }
                ?>
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
    </body>
</html>