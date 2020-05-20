<?php



//AQUI SE ENCONTRA A PARTE CONEXÃO COM O BANCO DE DADOS, TODAS AS CLASSES "CHAMAM" ESSA PARA REALIZAR ALTERAÇÕES E/OU REGISTROS NO BANCO



	$mysqli = new mysqli('localhost','root','','escola');
	mysqli_set_charset($mysqli, "utf8");
	
	if (mysqli_connect_error()) {
		echo "ERRO DE CONEXÃO !";
		die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
	}
?>