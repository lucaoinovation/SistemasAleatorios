<h1>Cadastrando Veículo</h1>
	<form action="index.php?page=s_moto&acao=cadastrar" method="POST">
	<?php
			
	?>
		<div class="form-group">
			
						
			<br>
				
			<label>Modelo</label>
				<input type="text" class="form-control" name="modelo_moto" required>
			
			<br>
			
			<label>Marca</label>
				<input type="text" class="form-control" name="marca_moto" maxlength="8" required>
				
			<br>	
				
			<label>Ano</label>
				<input type="date" class="form-control" name="ano_moto" required>
			
			<br>
			
			<label>Placa</label>
				<input type="text" class="form-control" name="placa_moto" required>
				
				<br>
				
				<button class="btn btn-success">Enviar</button>
	</form>
				
		</div>
		
	