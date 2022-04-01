<?php
    $materias = simplexml_load_file("./materias.xml");
    $materia = $materias->addChild('materia');
    $materia->addChild('codigo', $_POST['codigo']);
    $materia->addChild('nombre', $_POST['nombre']);
    $materia->addChild('uvs', $_POST['uvs']);
    $materia->addChild('nota', $_POST['nota']);

    file_put_contents('./materias.xml', $materias->asXML());
    session_start();
    $_SESSION['agregar'] = true;
    header('location:index.php');
?>