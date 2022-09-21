<h1>Listar Cliente Cadastrado</h1>
<?php

	$sql = "SELECT * FROM cliente";
	
	$resultado = $conn->query($sql) or die ($conn->error);
	$qtd = $resultado->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Identificador</th>";
		print "<th>Nome</th>";
		print "<th>CPF</th>";
		print "<th>RG</th>";
		print "<th>Telefone</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $resultado->fetch_assoc()){	
			print "<tr>";
			print "<td>".$row["idCliente"]."</td>";
			print "<td>".$row["nome_cliente"]."</td>";
			print "<td>".$row["cpf_cliente"]."</td>";
			print "<td>".$row["rg_cliente"]."</td>";
			print "<td>".$row["num_tel_cliente"]."</td>";
			
			print "<td>
					
					<button class='btn btn-success' onclick=\"location.href='index.php?page=e_cliente&idCliente=".$row["idCliente"]."';\"><i class='fa fa-edit'></i></button>
					
					<button class='btn btn-danger' onclick=\"location.href='index.php?page=s_cliente&acao=excluir&idCliente=".$row["idCliente"]."';\"><i class='fa fa-trash'></i></button>
					
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
	


?>