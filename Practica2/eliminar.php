<?php
    $codigo = $_GET['cod'];
    $materias = simplexml_load_file("./materias.xml");
    $index = 0;
    $i = 0;
    foreach($materias->materia as $row)
    {
        if($row->codigo == $codigo)
        {
            $index = $i;
            break;
        }
        $i++;
    }

    unset($materias->materia[$index]);

    file_put_contents('./materias.xml', $materias->asXML());
    session_start();
    $_SESSION['eliminar'] = true;
    header('location:index.php');
?>