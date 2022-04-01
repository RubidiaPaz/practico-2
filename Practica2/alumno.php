<?php
    session_start();
    $_SESSION['nombre']= isset($_POST['nombre'])?$_POST['nombre']: '';
    header('location:index.php');
?>