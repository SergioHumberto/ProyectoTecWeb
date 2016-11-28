<?php 
	$servername = "localhost";
	$username = "root";
	$password = "ciepred";
	$dbname = "tecwebbd";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO preguntas (Nombre_Empresa, Email, Pregunta)
			VALUES(
   				'".$_POST['txtNombreEmpresa']."'
   				,'".$_POST['txtEmail']."'
   				,'".$_POST['txtPregunta']."')";

	if ($conn->query($sql) === TRUE)
	{
	    echo "Registro insertado correctamente.";
		echo "<center><a href='http://localhost:80/ProyectoTecWeb/index.php'>Home</a>";
	}
	$conn->close();

?>