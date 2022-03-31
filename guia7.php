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
<form class="formoid-solid-purple">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">GUIA 5</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="guia6.php">GUIA 6</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="guia7.php">GUIA 7</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="guia8.php">GUIA 8</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<div class="title">
    <h2>Expresiones Regulares</h2>
</div>
<div class="element-name">
    <label class="title"></label>
    <div class="nameFirst">
        <input type="text" name="empleado" id="txtempleado" maxlength="50" placeholder="Nombre empleado" allowed="ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚáéíóúÜü" messageid="alfabeticchars" class="large" />
        <span class="icon-place"></span>
    </div>
    <span id="alfabeticchars">Solo acepta caracteres alfabéticos</span>
</div>
<div class="element-number">
    <label class="title"></label>
    <div class="item-cont">
        <input type="text" name="sueldobase" id="sueldobase" maxlength="12" placeholder="Sueldo base" allowed="0123456789." messageid="numbersonly" class="large" />
        <span class="icon-place"></span>
    </div>
    <span id="numbersonly">Solo acepta números y punto decimal</span>
</div>
<div class="element-checkbox">
    <label class="title">Horas extras:</label>
    <div class="column column1">
        <input type="checkbox" name="hextra" id="hextrasi" value="no" />
        <span>Habilitar</span>
    </div>
</div>
<div class="element-number">
    <label class="title"></label>
    <div class="item-cont">
        <input type="text" name="numhorasex" id="numhorasex" maxlength="2" disabled="disabled" placeholder="Número de horas" allowed="0123456789" messageid="integersonly" />
        <span class="icon-place"></span>
    </div>
    <span id="integersonly">Solo acepta números enteros</span>
</div>
<div class="element-number">
    <label class="title"></label>
    <div class="item-cont">
        <input type="text" name="pagohextra" id="pagohextra" size="12" maxlength="6" disabled="disabled" placeholder="Pago hora extra" allowed="0123456789." messageid="othernumbersonly" />
        <span class="icon-place"></span>
    </div>
    <span id="othernumbersonly">Solo acepta números y punto decimal</span>
</div>
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