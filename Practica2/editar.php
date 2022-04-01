<?php
    $materias = simplexml_load_file("./materias.xml");
    $index = 0;
    $i = 0;

    foreach ($materias->materia as $row)
    {
        if($row->codigo == $_GET['cod'])
        {
            $index = $i;
            break;
        }
        $i++;
    }

    $materias->materia[$index]->nombre = $_POST['nombre'];
    $materias->materia[$index]->tarea = $_POST['tarea'];
    $materias->materia[$index]->investigacion = $_POST['investigacion'];
    $materias->materia[$index]->examen = $_POST['examen'];
    $promedio= ($_POST['tarea']*0.5) + ($_POST['investigacion']*0.3) +($_POST['examen']*0.20);
    $materias->materia[$index]->promedio=(round($promedio,2));

    file_put_contents('./materias.xml', $materias->asXML());
    session_start();
    $_SESSION['editar'] = true;
    header('location:index.php');
?>