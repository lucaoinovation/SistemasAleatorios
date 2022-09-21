<h1>Cadastrando Ordem de Serviço</h1>
	<form action="index.php?page=s_orderserv&acao=cadastrar" method="POST">
		
		<label>Veículo para serviço</label>
			<?php 
				
				$sql = "SELECT * FROM veiculo";
			
			$result = $conn->query($sql) or die ($conn->error);
			
			$qtd = $result->num_rows;
			if($qtd > 0){
				print "<select name='id_veiculo' class='form-control'>";
				while($row = $result->fetch_assoc() ){
					print "<option value='".$row["idVeiculo"]."'>".$row["nome_veiculo"]."</option>";
				}
				print"</select>";
			}else{
				print "Não encontrou resultado";
			}
			
			?>
			
		<div class="form-group">
			
			<br>
				
			<label>Descrição</label>
				<textarea  class="form-control" name="descricao_orderserv" required></textarea>
					
					
			<label>Status
			<textarea class="form-control" name="status_os" required></textarea>
			</label>
			
			<br>
			
			<label>Forma de Pagamento</label>
				<textarea class="form-control" required></textarea>
				
						
				<br>
				
				<button class="btn btn-success">Enviar</button>
				
		
		</div>		
	</form>
		
		