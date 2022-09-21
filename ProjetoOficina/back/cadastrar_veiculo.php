<h1>Cadastrando Veículo</h1>
	<form action="index.php?page=s_veiculo&acao=cadastrar" method="POST">
		<div class="form-group form-group-lg">
			<label>Cliente</label>
			<?php
				$sql = "SELECT * FROM cliente";
				
				$result = $conn->query($sql) or die ($conn->error);
				
				$qtd = $result->num_rows;
				
				if($qtd > 0){
					print "<select name='id_cliente' class='form-control'>";
					while($row = $result->fetch_assoc()){
						print"<option value='".$row["idCliente"]."'>".$row["nome_cliente"]."</option>";
					} 
					print"</select>";
				}else{
					print"Não encontrou Resultado";
				}
			
			
			?>

				<br>
			<label>Nome do Veículo</label>
				<input type="text" class="form-control" name="nome_veiculo" required>
			
			<br>	
			
			<label>Marca do Veículo</label>
				<input type="text" class="form-control" name="marca_veiculo" required>
				
				<br>
				
			<label>Ano do Veículo</label>
				<input type="text" class="form-control" name="ano_veiculo" placeholder="AAAA/MM/DD" maxlength="10" required>
				
				<br>
				
			<label>Placa do Veículo</label>
				<input type="text" class="form-control" name="placa_veiculo" maxlength="8" required>
				
				<br>
				
			<label>Modelo do Veículo</label>
				<input type="text" class="form-control" name="modelo_veiculo" required>
				
			
				
			
				
				<br>
				
				<button class="btn btn-success">Enviar</button>
	</form>
				<?php
				
				?>
		</div>
		
	