<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Estilos.css"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Promociones</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" href="assets/css/main.css" />
    
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Tecnologias Web</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>

            <li class="dropdown">
              <a href="#promociones">Categorias</a>
              <div class="dropdown-content">
                <a href="CMexicana.php">Comida Mexicana</a>
                <a href="CChina.php">Comida China</a>
                <a href="CItaliana.php">Comida Italiana</a>
                <a href="CRapido.php">Comida Rapida</a>
              </div>
            </li>

            <li><a href="Promociones.php">Promociones del dia</a></li>
            <li><a href="#about">Acerca de</a></li>
            <li><a href="#contact">Contacto</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    
   <div id="page-wrapper">

      <!-- Header -->
        <div id="header-wrapper">
          <div id="header" class="container">

            <!-- Logo -->
              <h1 id="logo"><a href="index.html">Comida al instante </a></h1>
              <p>El lugar que estabas esperando</p>
          </div>
        </div>

      <!-- Features -->
        <div id="features-wrapper">
          <section id="features" class="container">
            <header>
              <h2>Estas son las promociones del dia <strong>
              <?php
                include("conexion.php");
                $c = new conexion();
                $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
                $resultado = $c->recuperaDatos($dias[date("w")]);
                /*while ($fila = mysql_fetch_array($resultado)) {
                  echo " Nombre: ".$fila['Id_Empresa']."<br/> ";
                  echo " Nombre: ".$fila['Nombre_Empresa']."<br/> ";
                  echo " Promocione: ".$fila['Descripcion']."<br/> ";
                }*/
                $extraido1 = mysql_fetch_array($resultado);
                $extraido2= mysql_fetch_array($resultado);
                $extraido3= mysql_fetch_array($resultado);
               
              echo "</strong>!</h2>
            </header>";
            echo'<div class="row">
              <div class="4u 12u(mobile)">

                <!-- Feature -->
                  <section>
                    <a href="#" class="image featured"><img src="Resources/legendaria.jpg" alt="" /></a>
                    <header>
                      <h3>'.$extraido1['Nombre_Empresa'].'</h3>
                    </header>
                    <p>'.$extraido1['Descripcion'].'</p>
                  </section>

              </div>
              <div class="4u 12u(mobile)">

                <!-- Feature -->
                  <section>
                    <a href="#" class="image featured"><img src="Resources/templebar.jpg" alt="" /></a>
                    <header>
                      <h3>'.$extraido2['Nombre_Empresa'].'</h3>
                    </header>
                    <p>'.$extraido2['Descripcion'].'</p>
                  </section>

              </div>
              <div class="4u 12u(mobile)">

                <!-- Feature -->
                  <section>
                    <a href="#" class="image featured"><img src="Resources/almacen.png" alt="" /></a>
                    <header>
                      <h3>'.$extraido3['Nombre_Empresa'].'</h3>
                    </header>
                    <p>'.$extraido3['Descripcion'].'</p>
                  </section>
                
              </div>
            </div>
          </section>';
          ?>
        </div>

      <!-- Banner -->
        <div id="banner-wrapper">
          <div class="inner">
            <section id="banner" class="container">
              <p>Use this space for <strong>profound thoughts</strong>.<br />
              Or an enormous ad. Whatever.</p>
            </section>
          </div>
        </div>

      <!-- Footer -->
        <div id="footer-wrapper">
          <div id="footer" class="container">
            <header>
              <h2>Preguntas y/o comentarios? <strong>Aqui:</strong></h2>
            </header>
            <div class="row">
              <div class="6u 12u(mobile)">
                <section>
                  <form method="post" action="#">
                    <div class="row 50%">
                      <div class="6u 12u(mobile)">
                        <input name="name" placeholder="Name" type="text" />
                      </div>
                      <div class="6u 12u(mobile)">
                        <input name="email" placeholder="Email" type="text" />
                      </div>
                    </div>
                    <div class="row 50%">
                      <div class="12u">
                        <textarea name="message" placeholder="Message"></textarea>
                      </div>
                    </div>
                    <div class="row 50%">
                      <div class="12u">
                        <a href="#" class="form-button-submit button icon fa-envelope">Enviar Mensaje</a>
                      </div>
                    </div>
                  </form>
                </section>
              </div>
              <div class="6u 12u(mobile)">
                <section>
                  <p>Por que para nosotros su opinion es muy importnte porfavor diganos como pudemos
                  mejorar nustros servicios... ¡Que tengas un muy buen día!</p>
                  <div class="row">
                    <div class="6u 12u(mobile)">
                      <ul class="icons">
                        <li class="icon fa-home">
                          1234 Somewhere Road<br />
                         San Luis Potosí, SLP 00000<br />
                          MEX
                        </li>
                        <li class="icon fa-phone">
                          (000) 000-0000
                        </li>
                        <li class="icon fa-envelope">
                          <a href="#">info@untitled.tld</a>
                        </li>
                      </ul>
                    </div>
                    <div class="6u 12u(mobile)">
                      <ul class="icons">
                        <li class="icon fa-twitter">
                          <a href="#">@untitled-tld</a>
                        </li>
                        <li class="icon fa-instagram">
                          <a href="#">instagram.com/untitled-tld</a>
                        </li>
                        <li class="icon fa-dribbble">
                          <a href="#">dribbble.com/untitled-tld</a>
                        </li>
                        <li class="icon fa-facebook">
                          <a href="#">facebook.com/untitled-tld</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
          <div id="copyright" class="container">
            <ul class="links">
              <li>&copy; 2016 - Tenologias Web Universidad Autónoma de San Luis Potosí</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
          </div>
        </div>

    </div>

    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.dropotron.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/skel-viewport.min.js"></script>
      <script src="assets/js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="assets/js/main.js"></script>

    <div class="container">

      <div class="starter-template">
        
        <h1 align="center">Recomendaciones para tí</h1>

        <ul align = center>
          <li>
            <a href="CMexicana.php">Comida Mexicana</a>
          </li>
          <li>
            <a href="CChina.php">Comida China</a>
          </li>
          <li>
            <a href="CItaliana.php">Comida Italiana</a>
          </li>
          <li>
            <a href="CRapida.php">Comida Rapida</a>
          </li>
        </ul>
      </div>


    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity=" sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>