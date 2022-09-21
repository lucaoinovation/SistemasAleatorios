<h1>Editar Cliente</h1>
<?php
	$sql = "SELECT * FROM cliente
			WHERE idCliente=".$_REQUEST["idCliente"];
	
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
		$row = $result->fetch_assoc();
?>
<form action="index.php?page=s_cliente&acao=editar&idCliente=<?php print $row["idCliente"]; ?>" method="POST">

	<div class="form-group">
		<label>ID</label>
		<input type="text" name="id_cliente" class="form-control" value="<?php print $row["idCliente"]; ?>">
    </div>
    
    <div class="form-group">
		<label>Nome</label>
		<input type="text" name="nome_cliente" class="form-control" value="<?php print $row["nome_cliente"]; ?>">
	</div>

	<div class="form-group">
		<label>CPF</label>
		<input type="text" name="cpf_cliente" class="form-control" value="<?php print $row["cpf_cliente"]; ?>">
	</div>
	<div class="form-group">
		<label>RG</label></label>
		<input type="text" name="rg_cliente" class="form-control" value="<?php print $row["rg_cliente"]; ?>">
	</div>
	<div class="form-group">
		<label>Telefone Cliente</label></label>
		<input type="text" name="num_tel_cliente" class="form-control" value="<?php print $row["num_tel_cliente"]; ?>">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>
<?php
	} //final do if
?>