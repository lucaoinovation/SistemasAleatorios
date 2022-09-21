<h1>Editar Cliente</h1>
<?php
	$sql = "SELECT * FROM oficina_cliente
			WHERE id_cliente ="$_REQUEST["id_cliente"];
	
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
		$row = $result->fetch_assoc();
?>
<form action="index.php?page=s_cliente&acao=editar&id_carro=<?php print $row["id_cliente"]; ?>" method="POST">

	<div class="form-group">
		<label>ID</label>
		<input type="text" name="id_cliente" class="form-control" value="<?php print $row["id_cliente"]; ?>">
    </div>
    
    <div class="form-group">
		<label>Nome</label>
		<input type="text" name="nome_cliente" class="form-control" value="<?php print $row["nome_cliente"]; ?>">
	</div>

	<div class="form-group">
		<label>CPF</label>
		<input type="text" name="cpf_cliente" class="form-control" value="<?php print $row["cad_pes_fis"]; ?>">
	</div>
	<div class="form-group">
		<label>RG</label></label>
		<input type="text" name="rg_cliente" class="form-control" value="<?php print $row["reg_geral"]; ?>">
	</div>
	<div class="form-group">
		<label>Telefone Cliente</label></label>
		<input type="text" name="telefone_cliente" class="form-control" value="<?php print $row["tele_cliente"]; ?>">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>
<?php
	} //final do if
?>