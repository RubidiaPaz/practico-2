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
<div class="formoid-solid-purple">
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
        <div id="bodywrap">
        <div id="contents"> 
            <section id="main"> 
                <div id="leftcontainer"> 
                    <section id="sidebar"> 
                        <?php
                            if(isset($_POST['Enviar']))
                            {
                                $text = isset($_POST['comment']) ? trim($_POST['comment']) : null;
                                $palabra = isset($_POST['palabra']) ? trim($_POST['palabra']) : null;
                                $text = preg_replace("/\b(".$palabra.")\b/i", '<span style="background:#5fc9f6">\1</span>', $text); 
                                $number = preg_match_all("/\b(".$palabra.")\b/i",$text,$counter);
                                echo "<b> Hay $number Coincidencias de $palabra</b>"; 
                        ?> <br>
                        <div id="sidebarwrap">
                            <br><b>Resultado</b>
                            <br><p><?=$text?></p> 
                        </div> 
                        <?php 
                            }
                        ?> 
                    </section>

                    <div class="clear"></div>
                    <article class="post">
                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="form">
                            <p class="textfield"> 
                                <label for="palabra"> <small>Palabra a buscar</small> </label> 
                                <input name="palabra" id="palabra" value="tierra" size="22" tabindex="1" type="text" /> 
                            </p> 
                            <p> 
                                <small>Ingrese el texto de prueba para procesarlo con las <strong>expresiones regulares</strong> </small>
                            </p>
                            <p class="text-area">
                                <textarea name="comment" id="comment" cols="50" rows="10" tabindex="4"> A 39 años luz de la tierra se encuentra la estrella Trappist-1, conocida en la NASA por el nombre de catálogo 2MASS J23062928-0502285. Es decir, un astro completamente irrelevante hasta hace muy poco. El pasado mayo, el equipo liderado por Michaël Gillon (Universidad de Lieja, Bélgica) ya anunció que había descubierto dos planetas (quizás tres) orbitándola. Con un 9% de la masa del Sol, Trappist-1 es una enana roja fría. Si fuera un poco más pequeña, ya no sería una estrella sino una enana marrón, que son astros fríos que no pueden fusionar hidrógeno como nuestro sol. Ahora la NASA ha anunciado que Trappist-1 no tiene tres, sino siete exoplanetas, todos ellos de tamaño similar al de la Tierra, tres o cuatro de los cuales están en órbitas templadas donde no hace ni demasiado frío ni demasiado calor para permitir la existencia de agua líquida en su superficie y, por lo tanto, vida tal como la conocemos. Al ser la estrella pequeña y mucho más débil que nuestro sol, los exoplanetas están en órbitas necesariamente muy compactas. Es más, si pusiéramos los planetas en torno a nuestro sol, todos cabrían cómodamente dentro de la órbita de Mercurio. 

                                </textarea> 
                            </p>
                            <p> 
                                <input name="Enviar" id="Enviar" value="1" type="hidden" /> 
                                <input name="submit" id="submit" tabindex="5" type="image" src="/img/submit.png" />
                            </p>
                            <div class="clear"></div> 
                        </form> 
                        <div class="clear"></div> 
                    </article> 
                </div> 
            </section> 
            <div class="clear"></div> 
        </div> 
    </div> 
    </div>
</article>
</section>
    </div>
<script src="js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="js/sidebars.js"></script>
</body>
</html>