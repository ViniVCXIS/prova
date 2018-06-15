<?php
	include("cabecalho.php");
		$id = $_GET["id"];
		$comando = "DELETE FROM veterinaria WHERE id=$id";
		$recurso = mysqli_query($conexao, $comando);
	
		mysqli_close($conexao);
		echo "Edição realizada com sucesso!";
		header("Location: listar.php");
?>