<?php 
	include("cabecalho.php");
	$id = $_GET['id'];
		$comando = "SELECT * FROM veterinaria WHERE id=$id";
		$recurso = mysqli_query($conexao, $comando);
		
		echo "<center>
			<form action='salvar_editar.php' method='post'>
				<fieldset>
					<legend> Edite as informações desejadas: </legend>
					<p>
						<label>Nome:</label>
						<input type = 'text' name = 'nome' required/></br>
						
						<label> Especie:</label>
						<input type = 'text' name = 'tipo'/></br>
						
						<label> CPF:</label>
						<input type = 'number' name = 'cpf'/></br>
						
						<label> Historico:</label>
						<input type = 'text' name = 'historico'/></br>
						
						<input type = 'hidden' name = 'id' value = '$id'/>
					</p>
					<input type=\"submit\" value=\"Salvar\"/>
				</fieldset>
			</form>
		</center>";
	include("rodape.php");
?>