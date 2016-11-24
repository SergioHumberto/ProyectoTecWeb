<?php
	class conexion{
		function recuperaDatos($dia){
			$host = "localhost";
			$user = "root";
			$pw = "ciepred";
			$db = "tecwebbd";
			$num = 2;

			$con = mysql_connect($host,$user,$pw) or die("No se conecto a la base de datos");
			mysql_select_db($db,$con) or die("No se encontro base de datos");
			echo "<h2>".$dia."</h2>";
			$query ="SELECT Empresas.Nombre_Empresa,Promociones.*
                     from Empresas
                         inner join Promociones on promociones.Dia='$dia' and Empresas.Id_Empresa = promociones.Id_Empresa";
                         

			$resultado = mysql_query($query);

			return $resultado;
		}

		function recuperaDatosCategoria($categoria){
			$host = "localhost";
			$user = "root";
			$pw = "ciepred";
			$db = "tecwebbd";
			$num = 2;

			$con = mysql_connect($host,$user,$pw) or die("No se conecto a la base de datos");
			mysql_select_db($db,$con) or die("No se encontro base de datos");
			
			$query ="SELECT Empresas.*,Categorias.Nombre_Categoria 
						from Empresas 
							inner join Categorias 
								on Categorias.Id_Categoria = $categoria 
								and Empresas.Id_Categoria = $categoria 
								and Empresas.Id_Categoria = categorias.Id_Categoria";
                         

			$resultado = mysql_query($query);

			return $resultado;
		}
	}
?>