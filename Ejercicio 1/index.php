<!DOCTYPE html5>
<html lang="es_ES">
    <head>
        <meta name="description" content="Rubén">
        <meta name="author" content="Rubén Bermejo Romero">
        <meta name="keywords" content="log in cookies practica">
        <meta charset="UTF-8">
        <title>Inicio de sesión</title>
    </head>

    <body>
        <?php
    
        $usuario1 = "usuario1";
        $pass1 = "meth";


        if (isset($_POST['usuario']) && isset($_POST['pass'])) {
            if (($_POST['usuario'])==$usuario1 && ($_POST['pass'])==$pass1) {
                session_start();
                $_SESSION['usuario'] == $usuario1;
                header("loaction:menu.php");
            }
        } else {
        ?>
        <h1>Taller XXXXXXXXXXXX</h1>
        
        <form action="index.php" method="POST">
            <table align="center">
                <tr>
                    <td>cancer:</td>
                    <td><input type="text" name="usuario"/></td>
                </tr>
                <tr>
                    <td>Contraseña:</td>
                    <td><input type="password" name="pass"/></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Iniciar sesión"/></td>
                </tr>
            </table>
        </form>
        <?php
        }
        ?>
    </body>
</html>