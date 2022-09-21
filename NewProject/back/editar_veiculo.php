<h1>Editar Carro</h1>
<?php
	$sql = "UPDATE veiculo SET nome_veiculo='".$_REQUEST["nome_veiculo"]."'WHERE idVeiculo =".$_REQUEST["idVeiculo"];
	
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
		$row = $result->fetch_assoc();
	}
?>
<form action="index.php?page=s_veiculo&acao=editar&idveiculo=<?php print $row["idveiculo"]; ?>" method="POST">

	<div class="form-group">
		<label>ID</label>
		<input type="text" name="idveiculo" class="form-control" value="<?php print $row["idveiculo"]; ?>">
	</div>
	<div class="form-group">
		<label>Nome do Veículo</label>
		<input type="text" name="nome_veiculo" class="form-control" value="<?php print $row["nome_veiculo"]; ?>">
	</div>
	<div class="form-group">
		<label>Marca do Veículo</label>
		<input type="text" name="marca_veiculo" class="form-control" value="<?php print $row["marca_veiculo"]; ?>">
	</div>
	<div class="form-group">
		<label>Ano do Veículo</label>
		<input type="text" name="ano_veiculo" class="form-control" value="<?php print $row["ano_veiculo"]; ?>">
	</div>
	<div class="form-group">
		<label>Placa do Veículo</label>
		<input type="text" name="placa_veiculo" class="form-control" value="<?php print $row["placa_veiculo"]; ?>">
	</div>
	<div class="form-group">
		<label>Modelo do Veículo</label>
		<input type="text" name="modelo_veiculo" class="form-control" value="<?php print $row["modelo_veiculo"]; ?>">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>
<?php
	 //final do if
?>