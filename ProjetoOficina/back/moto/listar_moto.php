<h1>Listar Moto Cadastradada</h1>
<?php

	$sql = "SELECT * FROM oficina_moto";
	
	$resultado = $conn->query($sql) or die ($conn->error);
	$qtd = $resultado->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome</th>";
		print "<th>Marca</th>";
		print "<th>Ano</th>";
		print "<th>Placa</th>";
		print "<th>Modelo</th>";
		print "</tr>";
		while($row = $resultado->fetch_assoc()){	
			print "<tr>";
			print "<td>".$row["id_moto"]."</td>";
			print "<td>".$row["nome_moto"]."</td>";
			print "<td>".$row["marca_moto"]."</td>";
			print "<td>".$row["ano_moto"]."</td>";
			print "<td>".$row["placa_moto"]."</td>";
			print "<td>".$row["modelo_moto"]."</td>";
			print "<td>
					
					<button class='btn btn-success' onclick=\"location.href='index.php?page=e_moto&id_moto=".$row["id_moto"]."';\"><i class='fa fa-edit'></i></button>
					
					<button class='btn btn-danger' onclick=\"location.href='index.php?page=s_moto&acao=excluir&id_moto=".$row["id_moto"]."';\"><i class='fa fa-trash'></i></button>
					
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
	


?>