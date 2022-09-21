<h1>Cadastro</h1>
	<form action="index.php?page=s_usuario&acao=cadastrar" method="POST">
		<div class="form-group form-group-lg">
			
			<label>Nome</label>
				<input type="text" class="form-control" name="nome_cliente" required >
				
				<br>
				
			<label>Email</label>
				<input type="text" class="form-control" name="email_cliente" required>
				
				<br>
				
			<label>Senha</label>
				<input type="password" class="form-control" name="senha_cliente" maxlength="8" required>
				
				<br>
				
			<label>Solicitação</label>
				<input type="text-area" class="form-control" name="descricao_cliente"  required>
				
				<br>
				
				
				<button class="btn btn-success">Enviar</button>
	</form>
				<?php
				
				?>
		</div>
		
	
