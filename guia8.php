<!DOCTYPE html>
<html lang="es">
<head>
    <title>Calculo de Salario</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <link rel="stylesheet" href="css/salario.css" />
    <link rel="stylesheet" href="css/formoid-solid-purple.css" />
    <script src="js/disabledtextfields.js"></script>
    <script src="js/inputFilter.js"></script>
    <script src="js/formoid-solid-purple.js"></script> -->
    <script src="js/modernizr.custom.lis.js"></script>
    <script src="js/prefixfree.min.js"></script>
    <meta name="theme-color" content="#7952b3">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  
      
      <!-- Custom styles for this template -->
      <link href="css/sidebars.css" rel="stylesheet">
</head>
<body>
<header id="inset">
    
    <h1>Parcial Practico #2</h1>
</header>

<section>
<article>
<div id="empleado">
    <div  class="formoid-solid-purple">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="index.php">GUIA 5</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="guia6.php">GUIA 6</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="guia7.php">GUIA 7</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="guia8.php">GUIA 8</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="title">
        <h2>Cálculo de salario</h2>
        </div>
        <?php
        require_once("empleado.class.php");


        if(isset($_POST['enviar']))
        {
            print("<h3>Boleta de pago del empleado</h3>");
            $name = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
            $apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : "";
            $sueldo = (isset($_POST['sueldo'])) ? doubleval($_POST['sueldo']) : 0.0;
            $numHorasExtras = (isset($_POST['horasextras'])) ?  intval($_POST['horasextras']) : 0;
            $pagohoraextra = (isset($_POST['pagohoraextra'])) ? floatval($_POST['pagohoraextra']) : 0.0;
            $descuentos = (isset($_POST['descuentos'])) ? doubleval($_POST['descuentos']) : 0.0;

            $empleado1 = new Empleado;
            $empleado1->obtenerSalarioNeto($name, $apellido, $sueldo, $numHorasExtras, $pagohoraextra, $descuentos);
        }
        else
        {
    ?>
    <section class="container">
        <article> 
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST"> 
                <fieldset> <br>
                    <div class="form-group"> 
                        <label for="nombre">Nombre empleado:</label>
                        <input type="text" name="nombre" id="nombre" size="25" maxlength="30" class="inputField form-control" /><br />
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido empleado:</label>
                        <input type="text" name="apellido" id="apellido" size="25" maxlength="30" class="inputField form-control" /><br />
                    </div>
                    <div class="form-group"> 
                        <label for="sueldo">Sueldo empleado ($):</label>
                        <input type="text" name="sueldo" id="sueldo" size="8" maxlength="8" class="inputField form-control" /><br />
                    </div>
                    <div class="form-group"> 
                        <label for="horasextras">Número horas extras:</label> 
                        <input type="text" name="horasextras" id="horasextras" size="4" maxlength="2" class="inputField form-control" /><br /> 
                    </div> 
                    <div class="form-group"> 
                        <label for="pogohoraextra">Pago por hora extra:</label> 
                        <input type="text" name="pagohoraextra" id="pagohoraextra" size="4" maxlength="6" class="inputField form-control" /><br />
                    </div>
                    <div class="form-group"> 
                        <label for="descuentos">Descuentos</label> 
                        <input type="text" name="descuentos" id="descuentos" size="8" maxlength="8" class="inputField form-control" /><br />
                    </div>  
                    <input type="submit" name="enviar" class="btn btn-primary mb-2" value="Enviar" class="inputButton" />&nbsp; 
                    <input type="reset" name="limpiar" class="btn btn-primary mb-2" value="Restablecer" class="inputButton" /> 
                </fieldset>
            </form>
    <?php
        }
    ?>
        </article>
    </section>


</article>
</section><br>
      </div>
<script src="js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="js/sidebars.js"></script>
</body>
</html>