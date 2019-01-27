<?php
        
    $usuario1 = "usuario";
    $pass = "1234";

    print_r($_POST);
    print_r($_SESSION);

    if (!$_POST) {
        echo 'introduce algo';
    } else {
        if (isset($_POST['usuario']) && isset($_POST['pass'])) {
            if ($_POST['usuario'] == $usuario1 && $_POST['pass'] == $pass) {
                session_start();
                $_SESSION['usuario'] = $usuario1;
                header("location:index.php");
            } else {
                echo 'incorrecto';
            }
        }
    }
?>