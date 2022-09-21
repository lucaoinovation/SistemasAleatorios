
<?php
	
	include("conexao.php");
	
	$id_veiculo = $_REQUEST["id_veiculo"];
	$descricao_orderserv = $_REQUEST["descricao_orderserv"];
	$status_os = $_REQUEST["status_os"];
	
	
	switch($_REQUEST["acao"]){
		case "cadastrar":
		
	$sql = "INSERT INTO ordemservice(nome_cliente, descricao_orderserv, status_os, id_veiculo) VALUES ('{$nome_cliente}', '{$descricao_orderserv}'), '{$status_os}', '{$id_veiculo}'";

	$resultado = $conn->query($sql) or die ($conn->error);
	}
?>
<button href="cadastrar_orderserv.php" class="btn btn-primary">Voltar</button>
