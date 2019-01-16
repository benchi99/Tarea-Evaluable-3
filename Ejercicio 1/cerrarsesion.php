<!DOCTYPE html5>
<html lang="es_ES">
    <head>
        <meta name="description" content="Gestion de Usuarios">
        <meta name="author" content="Rubén Bermejo Romero">
        <meta name="keywords" content="cierre sesion">
        <meta charset="UTF-8">
        <title>Cierre de sesión</title>
    </head>

    <body>
    <?php

        include 'compruebaSesionIniciada.php';

        session_unset();
        session_destroy();

    ?>  
    
    <p>Sesión cerrada</p>
    <a href="index.php">Volver al inicio de sesión</a>
    
    </body>
</html>