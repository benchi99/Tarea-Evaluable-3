<?php
    session_start();
    if (!$_SESSION){
        header('location:entrar.php');
    }
    
    if ($_SESSION['tipo'] == 'restringido' && $adminSolo == true) {
        header('location:denegado.php');
    }
?>