<?php
	
	$host = 'localhost:33065';
	$usuario = 'root';
	$password = '';
	$db = 'facturacion';

	$conection = @mysqli_connect($host,$usuario,$password,$db);

	if (!$conection){
		echo "Error en la conexion";
		echo "<br>";
		echo "<br>";

	}
	//else{
	//	echo "Conexion exitosa";
	//}

 ?>