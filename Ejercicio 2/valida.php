<?php
        
    $usuario1 = "usuario";
    $pass1 = "1234";

    if (!$_POST) {
        header('location:entrar.php?error=1');
    } else {
        if (isset($_POST['usuario']) && isset($_POST['pass'])) {
            if ($_POST['usuario'] == $usuario1 && $_POST['pass'] == $pass1) {
                iniciarSesion($usuario1);
            } else {
                header('location:entrar.php?error=2');
            }
        }
    }

    function iniciarSesion($usuario) {
        session_start();
        $_SESSION['usuario'] = $usuario;
        header("location:index.php");
    
    }

?>