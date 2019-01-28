<?php
        
    $usuario1 = "usuario";
    $pass1 = "1234";

    $usuario2 = "admin";
    $pass2 = "4321";

    if (!$_POST) {
        header('location:entrar.php?error=1');
    } else {
        if (isset($_POST['usuario']) && isset($_POST['pass'])) {
            if ($_POST['usuario'] == $usuario1 && $_POST['pass'] == $pass1) {
                iniciarSesion($usuario1, 'restringido');
            } else if ($_POST['usuario'] == $usuario2 && $_POST['pass'] == $pass2) {
                iniciarSesion($usuario2, 'admin');
            } else {
                header('location:entrar.php?error=2');
            }
        }
    }

    function iniciarSesion($usuario, $tipo) {
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['tipo'] = $tipo; 
        header("location:index.php");
    }


?>