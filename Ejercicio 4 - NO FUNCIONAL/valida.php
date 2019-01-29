<?php


    if (isset($_COOKIE['usuario']) && isset($_COOKIE['pass'])) {
        iniciaSesion($_COOKIE['usuario'], $_COOKIE['pass']);     
    } else if (isset($_POST['usuario']) && isset($_POST['pass'])) {
            
        $exito = verificaCredenciales($_POST['usuario'], password_hash($_POST['pass'], PASSWORD_DEFAULT));

        echo $exito;

        if ($exito) {
            if(!empty($_POST['recordar'])){
                setcookie("usuario", $_POST['usuario'],(time() + 60 * 60 * 24 * 30), "/");
                setcookie("pass", password_hash($_POST['pass'], PASSWORD_DEFAULT), (time() + 60 * 60 * 24 * 30), "/");
            }
            iniciarSesion($_POST['usuario'], devuelveTipoUsuario($_POST['usuario']));
        } /*else {
            header('location:entrar.php?error=2');
        }
        */
    } /*else {
        header('location:entrar.php?error=1');
    }
    */

    function verificaCredenciales($usuario, $pass) {
        $conexionBD = mysqli_connect("localhost", "root", "", "taller")
        or die("Hubo un error al conectarse a la base de datos.");
    
        $consulta = mysqli_query($conexionBD, "SELECT * FROM usuarios");

        $exito = false;

        while ($fila = $consulta -> fetch_assoc()) {
            $usuarioBD = $fila['usuario'];
            $passHash = $fila['pass'];
        
            if ($usuario == $usuarioBD && $pass == $passHash) {
                $exito = true;
                break;
            }          
        }
        return $exito;
    }

    function devuelveTipoUsuario($usuario) {
        $conexionBD = mysqli_connect("localhost", "root", "", "taller")
        or die("Hubo un error al conectarse a la base de datos.");

        $tipoUsCons = mysqli_query($conexionBD, "SELECT tipo_usuario FROM usuarios WHERE usuario = ".$usuario);
        $tipo = mysqli_fetch_field($tipoUsCons);
        return $tipo;
    }
    
    function iniciarSesion($usuario, $tipo) {
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['tipo'] = $tipo; 
        header("location:index.php");
    }

?>