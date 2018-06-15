<?php
	include("cabecalho.php");
		$id = $_POST["id"];
		$comando = "SELECT * FROM veterinaria WHERE id=$id";
		$recurso = mysqli_query($conexao, $comando);

		if(!$recurso) {
			echo "Numero: " . mysqli_errno($conexao) . "<br>";
			echo "Descricao: ".mysqli_error($conexao) . "<br>";
			exit;
		}
		
		$id = $_POST["id"];
		$nome = $_POST["nome"];
		$tipo = $_POST["tipo"];
		$cpf = $_POST["cpf"];
		$historico = $_POST["historico"];
		
		$comando = "UPDATE veterinaria SET nome='$nome', tipo='$tipo', cpf='$cpf', historico='$historico' WHERE id=$id";
		$recurso = mysqli_query($conexao, $comando);

		mysqli_close($conexao);
		echo "Edição realizada com sucesso!";
		header("Location: listar.php");
	include("rodape.php");
?>