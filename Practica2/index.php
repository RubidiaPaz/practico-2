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
            <?php
            if (isset($_SESSION['nombre'])) {
                echo "<h4>".$_SESSION['nombre']."</h4>";
            }
              
            ?>
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Uv</th>
                    <th>Notas</th>
                    <th>Acciones</th>
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
                            <td><?=$row->codigo?></td>
                            <td><?=$row->nombre?></td>
                            <td><?=$row->uvs?></td>
                            <td><?=$row->nota?></td>
                            <td>
                                <a href="#edit_<?=$row->codigo?>" data-toggle="modal" class="btn btn-success">Editar</a>
                                <a href="#delete_<?=$row->codigo?>" data-toggle="modal" class="btn btn-danger">Borrar</a>
                            </td>
                            <?php include('editar_modal.php'); ?>
                            <?php include('borrar_modal.php'); ?>
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
            <?php
                if(isset($cum))
                {
                    echo "<h2>CUM: $cum</h2>";
                }
                if ($cum >= 7.5) {
                    echo "<h3>Puedes cursar un maximo de 32 unidades valorativas(UV)</h3>";
                }if ($cum>=7.0 && $cum< 7.5 ) {
                    echo "<h3>Puedes cursar un maximo de 24 unidades valorativas(UV)</h3>";
                } if($cum>=6.0 && $cum<7.0) {
                    echo "<h3>Puedes cursar un maxino de 20 unidades valorativas(UV)</h3>";
                }
                
                
            ?>
         
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