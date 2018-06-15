<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Veterinária Fuentes</title>
	</head>
	<body>
		<?php 
		$conexao = mysqli_connect("localhost", "vini", "12345");
		$banco = mysqli_select_db($conexao, "prova");
		?>
		<a href="index.php">Index</a>	|	
		<a href="cadastro.php">Cadastrar Animal</a>	|	
		<a href="listar.php">Mostrar Todos</a>	|	
		<a href="informar_cpf.php">Mostrar somente pelo CPF</a>