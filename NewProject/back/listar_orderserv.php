<h1>Listar Ordem de Serviço Cadastrada</h1>
<?php

	$sql = "SELECT * FROM ordemservice";
	
	$resultado = $conn->query($sql) or die ($conn->error);
	$qtd = $resultado->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Identificador</th>";
		print "<th>Descrção</th>";
		print "<th>Veículo</th>";
		print "<th>Status</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $resultado->fetch_assoc()){	
			print "<tr>";
			print "<td>".$row["idOrderserv"]."</td>";
			print "<td>".$row["descricao_orderserv"]."</td>";
			print "<td>".$row["id_veiculo"]."</td>";
			print "<td>".$row["status_os"]."</td>";
			
			print "<td>
					
					<button class='btn btn-success' onclick=\"location.href='index.php?page=e_orderserv&idOrderserv=".$row["idOrderserv"]."';\"><i class='fa fa-edit'></i></button>
					
					<button class='btn btn-danger' onclick=\"location.href='index.php?page=s_orderserv&acao=excluir&idOrderserv=".$row["idOrderserv"]."';\"><i class='fa fa-trash'></i></button>
					
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
	


?>