
<?php
	
	include("dao\conexao.php");
	
	$id_veiculo = $_REQUEST["id_veiculo"];
	$descricao_orderserv = $_REQUEST["descricao_orderserv"];
	$status_os = $_REQUEST["status_os"];
	
	
	switch($_REQUEST["acao"]){
		case "cadastrar":
		
	$sql = "INSERT INTO ordemservice(id_veiculo, desc_os, status_os, valor_os) VALUES ('{$id_veiculo}'), '{$desc_os}', '{$status_os}', '{$valor_os}'";

	
	}
	$resultado = $conn->query($sql) or die ($conn->error);

	error_reporting(E_ALL);
	
	?>

<button href="index.php?page=c_orderserv" class="btn btn-primary">Voltar</button>