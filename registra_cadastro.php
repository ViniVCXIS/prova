<?php 
	include("cabecalho.php");
	
	$nome = $_POST["nome"];
	$tipo = $_POST["tipo"];
	$cpf = $_POST["cpf"];
	$historico = $_POST["historico"];
	
	$sql = "INSERT INTO veterinaria(nome,tipo,cpf,historico) VALUES ('$nome','$tipo','$cpf','$historico')";
	
	mysqli_query($conexao,$sql);
	
	header("location:cadastro.php");
?>