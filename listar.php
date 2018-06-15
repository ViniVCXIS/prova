<?php 
	include("cabecalho.php");
	$sql = "SELECT * FROM veterinaria";
	$query = mysqli_query($conexao,$sql);
	
	echo "<table border='1'>
		<tr>
		<th>Nome</th>
		<th>Espécie</th>
		<th>CPF</th>
		<th>Histórico</th>
		<th colspan= '2'>Opcoes</th>
		</tr>";
	while(($linha = mysqli_fetch_array($query)) != NULL){
		echo "<tr><td>$linha[1]</td>";
		echo "<td>$linha[2]</td>";
		echo "<td>$linha[3]</td>";
		echo "<td>$linha[4]</td>";
		echo "<td><a href='editar.php?id=$linha[0]'>Alterar</a></td>";
		echo "<td><a href='excluir.php?id=$linha[0]'>Excluir</a></td></tr>";
	}
	echo "</table>";
?>
</table>
<?php
	include("rodape.php");
?>