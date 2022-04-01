<!DOCTYPE html>
<html lang="es">
<head>
    <title>Tablas de multiplicar</title>
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
<form  method="POST" name="numero" id="numero" class="formoid-solid-purple">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="index.php">GUIA 5</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="guia6.php">GUIA 6</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="guia7.php">GUIA 7</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="guia8.php">GUIA 8</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<div class="title">
    <h2>Tabla de Multiplicar</h2>
</div>


<!-- numero para la tabla -->
<div class="element-number">
    <label class="title"></label>
    <div class="item-cont">
        <input type="text" name="numero" id="numero" maxlength="12" placeholder="Numero" allowed="0123456789." messageid="numbersonly" class="large" />
        <span class="icon-place"></span>
    </div>
    <span id="numbersonly">Solo acepta números y punto decimal</span>
</div>

<!-- multiplo final  -->
<div class="element-number">
    <label class="title"></label>
    <div class="item-cont">
        <input type="text" name="multiplo" id="multiplo" maxlength="12" placeholder="Multiplo" allowed="0123456789" messageid="numbersonly" class="large" />
        <span class="icon-place"></span>
    </div>
    <span id="numbersonly">Solo acepta números enteros</span>
</div>


<?php
        
        if(isset($_POST['enviar']))
        {
          $numero = (isset($_POST['numero'])) ? doubleval($_POST['numero']) : 0.0;
          print("<h3>Tabla de multiplicar de $numero </h3>");
          Calcular_tabla();
        
        }
?>

<?php


       function Calcular_tabla(){
       $numero = (isset($_POST['numero'])) ? doubleval($_POST['numero']) : 0.0;
       $multiplo = (isset($_POST['multiplo'])) ? doubleval($_POST['multiplo']) : 0.0;

       echo "<ul>";
      
       for($i=1;$i<=$multiplo;$i++){
         if ($i%2==0){ // Es par $i
           echo "<li><span style='color:red'>$numero x $i = ";
           echo $numero*$i;
           echo "</span></li>";                            
         }    //Fin del if
         else{
           echo "<li>$numero x $i = ";
           echo $numero*$i;
           echo "</li>";
         } //Fin del else
       } //Fin del for            
                 
       echo "</ul>";
       
      }
  
    ?>

<div class="submit">
    <input type="submit" name="enviar" id="enviar" value="Enviar" />
    <input type="reset" name="reset" id="reset" value="Restablecer" />
</div>
</form>
</div>
</article>
</section>
<script src="js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="js/sidebars.js"></script>
</body>
</html>
