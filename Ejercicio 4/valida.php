<?php
        
    $conexionBD = mysqli_connect("localhost", "root", "", "taller")
    or die("Hubo un error al conectarse a la base de datos.");

    $consulta = mysqli_query($conexionBD, "SELECT * FROM usuarios");

   if (isset($_POST['usuario']) && isset($_POST['pass'])) {
            
        $exito = false;

        while ($fila = $consulta -> fetch_assoc()) {
            $usuario = $fila['usuario'];
            $passHash = $fila['pass'];
            $tipo = $fila['tipo_usuario'];
        
            if ($_POST['usuario'] == $usuario && password_verify($_POST['pass'], $passHash)) {
                $exito = true;
                iniciarSesion($usuario, $tipo);
                break;
            }          
        }

        if (!$exito) {
            header('location:entrar.php?error=2');
        }
        
    } else {
        header('location:entrar.php?error=1');
    }
    
    function iniciarSesion($usuario, $tipo) {
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['tipo'] = $tipo; 
        header("location:index.php");
    }

?>