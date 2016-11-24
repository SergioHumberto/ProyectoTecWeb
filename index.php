
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="Estilos.css"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Home</title>

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
    
    <link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/main.css" />

    <style type="text/css">

      body{
        
      }

      .carousel .item {
        height: 450px;
      }

  .item img {
    position: absolute;
    top: 0;
    left: 0;
    min-height: 450px;
  }

      td .ancho{
        width="192"
        background: #fd0;
        padding: 20px;
      }
      .contenedor-tabla{
        display: table;
      }
      .contenedor-fila{
        display: table-row;
      }
      .contenedor-columna{
        display: table-cell;
      }

      .tsbtn {
          background: #000;
          color: #fff;
          margin: 20px auto 0;
          -webkit-border-radius: 5px;
          -moz-border-radius: 5px;
      }
    </style>
    
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
          <a class="navbar-brand" href="#">Tecnologias Web</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>

            <li class="dropdown">
              <a href="#promociones">Categorias</a>
              <div class="dropdown-content">
                <a href="CMexicana.php">Comida Mexicana</a>
                <a href="CChina.php">Comida China</a>
                <a href="CItaliana.php">Comida Italiana</a>
                <a href="CRapida.php">Comida Rapida</a>
              </div>
            </li>

            <li><a href="Promociones.php">Promociones del dia</a></li>
            <li><a href="#about">Acerca de</a></li>
            <li><a href="#contact">Contacto</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="Resources/image1.jpeg" alt="image1">
      </div>

      <div class="item">
        <img src="Resources/image2.jpg" alt="image2">
      </div>

      <div class="item">
        <img src="Resources/image3.jpg" alt="image3">
      </div>

      <div class="item">
        <img src="Resources/image4.jpg" alt="image4">
      </div>
    </div>

    <!-- Lef

    t and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>

    <div class="container">

      <div class="starter-template">
        
        <table align="center">
          <tr>
            <td>
              <img src="Resources/soluciones.svg"  width="200" height="192">
            </td>
            <td>
              <h1 align="center">¡El lugar que estabas esperando!</h1>
              <p class="lead" align="center">Navega y encuentra algo ideal para tí</p>
            </td>
            <td width="192" align="center">
              <img src="Resources/tienda-smart.svg" width="150" height="auto">
              <p>Impulsamos tu negocio en el mundo del comercio electrónico.</p>
              <a class="tsbtn" target="_blank">¡Comienza Ya!</a>
            </td>
          </tr>
        </table>
    </div><!-- /.container -->
             <!-- Footer -->
    <div id="footer-wrapper">
      <div id="footer" class="container">
        <header>
          <h2>Preguntas y/o comentarios? <strong>Aqui:</strong></h2>
        </header>
      <div class="row">
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
            <a>Comida Mexicana</a>
          </li>
          <li>
            <a>Comida China</a>
          </li>
          <li>
            <a>Comida Italiana</a>
          </li>
          <li>
            <a>Comida Rapida</a>
          </li>
        </ul>
      </div>



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
