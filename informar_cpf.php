<?php
	include("cabecalho.php");
?>
	<form method="post" action="listar_cpf.php">
		<label>CPF para Listagem:</label>
		<input type="number" name="cpfdesejado" />
		<br />
		<input type="submit" value="Enviar" />
	</form>
<?php
	include("rodape.php");
?>