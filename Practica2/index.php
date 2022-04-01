<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculadora de CUM</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <?php session_start(); ?>
</head>
<body >
<div class="container">
    <h1 class="page-header text-center">Calculadora de CUM</h1>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Agregar registro de notas</a>
            
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>Nobre</th>
                    <th>Tarea</th>
                    <th>Investigacion</th>
                    <th>Examen Parcial</th>
                    <th>Promedio</th>
                </thead>
                <tbody>
                    <?php
                        $materias = simplexml_load_file("./materias.xml");
                        $numerador = 0;
                        $denominador = 0;
                        
                        foreach ($materias->materia as $row)
                        {
                            $denominador += $row->uvs;
                            $numerador += ($row->uvs * $row->nota);
                    ?>
                        <tr>
                            <td><?=$row->nombre?></td>
                            <td><?=$row->tarea?></td>
                            <td><?=$row->investigacion?></td>
                            <td><?=$row->examen?></td>
                            <td>

                            </td>
                        </tr>
                    <?php 
                        }
                        if($denominador != 0)
                        {
                            $cum =  round($numerador/$denominador, 1);
                        }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('nueva_modal.php'); include('modal_alumno.php') ?>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- MENSAJE CUANDO SE CREA UNA MATERIA -->
<?php
    if(isset($_SESSION['agregar']) && $_SESSION['agregar'] == true) 
    {
?>
    <script>
        alertify.success('Materia insertada exitosamente');
    </script>
<?php
    unset($_SESSION['agregar']);
    }
?>

<!-- MENSAJE CUANDO SE EDITA UNA MATERIA -->
<?php
    if(isset($_SESSION['editar']) && $_SESSION['editar'] == true) 
    {
?>
    <script>
        alertify.success('Materia editada exitosamente');
    </script>
<?php
    unset($_SESSION['editar']);
    }
?>

<!-- MENSAJE CUANDO SE EDITA UNA MATERIA -->
<?php
    if(isset($_SESSION['eliminar']) && $_SESSION['eliminar'] == true) 
    {
?>
    <script>
        alertify.success('Materia eliminada exitosamente');
    </script>
<?php
    unset($_SESSION['eliminar']);
    }
?>

</body>
</html>