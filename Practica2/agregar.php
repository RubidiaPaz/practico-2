<?php
    $materias = simplexml_load_file("./materias.xml");
    $materia = $materias->addChild('materia');
    $materia->addChild('nombre', $_POST['nombre']);
    $materia->addChild('tarea', $_POST['tarea']);
    $materia->addChild('investigacion', $_POST['investigacion']);
    $materia->addChild('examen', $_POST['examen']);
    $materia->addChild('promedio',);

    file_put_contents('./materias.xml', $materias->asXML());
    session_start();
    $_SESSION['agregar'] = true;
    header('location:index.php');
?>