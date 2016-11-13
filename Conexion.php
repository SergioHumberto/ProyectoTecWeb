<?php
	class conexion{
		$host 	= "localhost";
		$user 	= "root";
		$pw 	= "ciepred";
		$db 	= "Promociones";
		function recuperaDatos(){

			$con = mysql_connect($host,$user,$pw) or die("No se conecto a la base de datos");
			mysql_select_db($db,$con) or die("No se encontro base de datos");
			$query = "SELECT * FROM alumno";
			$resultado = mysql_query($query);
			echo"<table>";
			echo "<tr>";
			echo "<td>id</td>"."<td>nombre</td>"."<td>apellido paterno</td>"."<td>apellido materno</td>";
			echo "<tr>";

			while ($fila = mysql_fetch_array($resultado)) {
				echo "<tr>";
				echo "<td>".$fila[Id_Alumno]."</td> <td>"."$fila[Nombre]</td> <td>"."$fila[Apellido_Paterno]</td> <td>"."$fila[Apellido_Materno]</td>";
				echo "</tr>";
			}
			echo"</table>";
		}
	}
?>