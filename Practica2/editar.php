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

    $materias->materia[$index]->codigo = $_POST['codigo'];
    $materias->materia[$index]->nombre = $_POST['nombre'];
    $materias->materia[$index]->uvs = $_POST['uvs'];
    $materias->materia[$index]->nota = $_POST['nota'];

    file_put_contents('./materias.xml', $materias->asXML());
    session_start();
    $_SESSION['editar'] = true;
    header('location:index.php');
?>