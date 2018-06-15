<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Veterinária Fuentes</title>
	</head>
	<body>
		<?php 
		$conexao = mysqli_connect("vini","localhost","12345");
		$banco = mysqli_select_db("prova",$conexao);
		?>
		<a href="index.php">Index</a>	|	
		<a href="">Cadastrar Animal</a>	|	
		<a href="">Mostrar Todos</a>	|	
		<a href="">Mostrar somente pelo CPF</a>