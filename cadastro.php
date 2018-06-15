<?php 
	include("cabecalho.php");
?>
	<fieldset>
		<legend>Cadastro</legend>
		<form method="post" action="registra_cadastro.php">
			<label>Nome</label>
			<input type="text" name="nome" required/>
			<br />
			<label>Espécie</label>
			<input type="text" name="tipo" required/>
			<br />
			<label>CPF</label>
			<input type="number" name="cpf" required/>
			<br />
			<label>Histórico</label>
			<input type="text" name="historico" required/>
			<br />
			<input type="submit" value="Enviar"/>
			<input type="reset" value="Limpar"/>
		</form>
	</fieldset>
<?php
	include("rodape.php");
?>