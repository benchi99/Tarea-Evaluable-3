<!DOCTYPE html5>
<html lang="es_ES">
    <head>
        <meta name="description" content="cerrar sesión">
        <meta name="author" content="Rubén Bermejo Romero">
        <meta name="keywords" content="cerrar php sesiones">
        <meta charset="UTF-8">
        <title>Sesión cerrada.</title>
    </head>

    <body>    
    <?php
        include 'verificaCuentaIniciada.php';

        session_unset();
        session_destroy();
    ?>
    <h1>Sesión cerrada.</h1>

    <a href="entrar.php">Volver al inicio</a>

    </body>
</html>
