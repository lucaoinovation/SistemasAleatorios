<h1>Editar Moto</h1>
<?php
	$sql = "SELECT * FROM oficina_moto
			WHERE id_moto=".$_REQUEST["id_moto"];
	
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
		$row = $result->fetch_assoc();
?>
<form action="index.php?page=s_moto&acao=editar&id_moto=<?php print $row["id_moto"]; ?>" method="POST">

	<div class="form-group">
		<label>ID</label>
		<input type="text" name="id_moto" class="form-control" value="<?php print $row["id_moto"]; ?>">
	</div>
	<div class="form-group">
		<label>Nome da Moto</label>
		<input type="text" name="nome_moto" class="form-control" value="<?php print $row["nome_moto"]; ?>">
	</div>
	<div class="form-group">
		<label>Modelo</label></label>
		<input type="text" name="modelo_moto" class="form-control" value="<?php print $row["modelo_moto"]; ?>">
	</div>
	<div class="form-group">
		<label>Marca</label></label>
		<input type="text" name="marca_moto" class="form-control" value="<?php print $row["marca_moto"]; ?>">
	</div>
	<div class="form-group">
		<label>Ano</label>
		<input type="text" name="ano_moto" class="form-control" value="<?php print $row["ano_moto"]; ?>">
	</div>
	<div class="form-group">
		<label>Placa</label>
		<input type="text" name="placa_moto" class="form-control" value="<?php print $row["placa_moto"]; ?>">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>
<?php
	} //final do if
?>