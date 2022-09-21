	<?php
	
	include("conexao.php");
	
	$nome = @$_REQUEST["nome_carro"];
	$emai = @$_REQUEST["marca_carro"];
	$senha = @$_REQUEST["ano_carro"];
	$placa = @$_REQUEST["placa_carro"];
	$modelo = @$_REQUEST["modelo_carro"];
	

	switch($_REQUEST["acao"]){
		case "cadastrar":
		$sql = "INSERT INTO oficina_carro (nome_carro, marca_carro, ano_carro, placa_carro, modelo_carro) 
		VALUES ('{$nome}', '{$marca}', '{$ano}', '{$placa}', '{$modelo}')";
		
		$resultado = $conn->query($sql) or die ($conn->error);
		
		"</br>";
		"</br>";
		
		if($resultado==true){
			echo "<div class='alert alert-success'>Cadastrado com sucesso!!</div>";
		} else{
			echo"<div class='alert alert-danger'>Não foi possível cadastrar!!</div>";
		}
		break;		
?>
<button href="cadastrar_cliente.php" class="btn btn-primary">Voltar</button>