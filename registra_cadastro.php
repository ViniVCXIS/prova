<?php 
	include("cabecalho.php");
	$nome = $_POST[""];
	$tipo = $_POST[""];
	$cpf = $_POST[""];
	$historico = $_POST[""];
	
	$sql = "INSERT INTO veterinaria('nome','tipo','cpf','historico') VALUES ('$nome','$tipo','$cpf','$historico')";
	
	mysqli_query($sql,$conexao);
	
	header("location:cadastro.php");
?>