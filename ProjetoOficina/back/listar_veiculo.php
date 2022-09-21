<html lang="pt-br">
	<meta charset="UTF-8">
<h1>Listar Veículo</h1>
<?php

	$sql = "SELECT * FROM veiculo";
	
	$resultado = $conn->query($sql) or die ($conn->error);

	$qtd = $resultado->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Identificador</th>";
		print "<th>Modelo</th>";
		print "<th>Marca</th>";
		print "<th>Ano</th>";
		print "<th>Placa</th>";
		print "<th>Nome</th>";
		print "<th>Cliente</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $resultado->fetch_assoc()){	
			print "<tr>";
			print "<td>".$row["idVeiculo"]."</td>";
			print "<td>".$row["modelo_veiculo"]."</td>";
			print "<td>".$row["marca_veiculo"]."</td>";
			print "<td>".$row["ano_veiculo"]."</td>";
			print "<td>".$row["placa_veiculo"]."</td>";
			print "<td>".$row["nome_veiculo"]."</td>";
			print "<td>".$row["id_cliente"]."</td>";
			print "<td>
					
					<button class='btn btn-success' onclick=\"location.href='index.php?page=e_veiculo&idVeiculo=".$row["idVeiculo"]."';\"><i class='fa fa-edit'></i></button>
					
					<button class='btn btn-danger' onclick=\"location.href='index.php?page=s_veiculo&acao=excluir&idVeiculo=".$row["idVeiculo"]."';\"><i class='fa fa-trash'></i></button>
					
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
	


?>