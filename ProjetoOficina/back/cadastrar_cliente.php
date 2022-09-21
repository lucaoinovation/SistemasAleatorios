<?php include_once 'cabecalho.php' ;?>
<h1>Cadastrando Cliente</h1>
	<form action="index.php?page=s_cliente&acao=cadastrar" method="POST">
		
			<?php 	
			
			
			
			?>
			
		<div class="form-group">
			<br>
			
			<label>Nome do Cliente:</label>
				<input type="text" class="form-control" name="nome_cliente" required >
				
			<br>
				
			<label>Preencha com seu Cadastro de Pessoa Física:</label>
				<input type="text" class="form-control" name="cpf_cliente" required>
			
			<br>
			
			<label>Registro Geral do Cliente(rg)</label>
				<input type="text" class="form-control" name="rg_cliente" maxlength="8" required>
				
			<br>	
				
			<label>Número do Telefone:</label>
				<input type="num" class="form-control" name="num_tel_cliente" maxlength="30" required>
					
					<br>
				
			
				
				<br>
				
				<button class="btn btn-success">Enviar</button>
				
		
		</div>		
	</form>
		
		