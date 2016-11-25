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

  <title>Contacto</title>

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
        <button type="button" class="navbar-toggle collapsed" 
          data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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
              <a href="#Categoria1">Comida Mexicana</a>
              <a href="#Categoria2">Comida China</a>
              <a href="#Categoria3">Comida Italiana</a>
              <a href="#Categoria4">Comida Rapida</a>
            </div>
          </li>
          <li><a href="Promociones.php">Promociones del dia</a></li>
          <li><a href="#about">Acerca de</a></li>
          <li><a href="Contacto.php">Contacto</a></li>
        </ul>
      </div><!--/.nav-collapse -->

    </div>
  </nav>

  <div id="footer-wrapper">
    <div id="footer" class="container">
      
      <header>
        <h2>Contacto</h2>
      </header>

      <form method="post" action="Contacto_BD.php">
        <table align="center">
          
          <tr>
            <input name="txtNombreEmpresa" 
              placeholder="Nombre de la empresa" 
              type="text"
              maxlength="20" />
          </tr>

          &nbsp

          <tr>
            <input name="txtEmail" 
              placeholder="Email" 
              type="text" 
              maxlength="20" />
          </tr>

          &nbsp

          <tr>
            <textarea name="txtPregunta" 
              placeholder="Pregunta" 
              maxlength="50"></textarea>
          </tr>

          <tr>
              <input type="submit" name="submit" value="Enviar">
          </tr>
            
        </table>

      </form>

    </div>
  </div>

  <script type="text/javascript">
    
  </script>

  <!-- Scripts -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.dropotron.min.js"></script>
  <script src="assets/js/skel.min.js"></script>
  <script src="assets/js/skel-viewport.min.js"></script>
  <script src="assets/js/util.js"></script>
  <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
  <script src="assets/js/main.js"></script>

</body>
</html>