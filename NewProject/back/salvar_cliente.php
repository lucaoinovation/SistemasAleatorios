<?php
    
    include("dao/conexao.php");

	$idCliente = @$_REQUEST["idCliente"];
    $nome_cliente = @$_REQUEST["nome_cliente"];
	$cpf_cliente = @$_REQUEST["cpf_cliente"];
	$rg_cliente = @$_REQUEST["rg_cliente"];
	$num_tel_cliente = @$_REQUEST["num_tel_cliente"];
	
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO cliente(nome_cliente, cpf_cliente, rg_cliente, num_tel_cliente) VALUES ('{$nome_cliente}', '{$cpf_cliente}', '{$rg_cliente}', '{$num_tel_cliente}')";
			
			$result = $conn->query($sql) or die ($conn->error);
			
			if($result==true){
				print "<div class='alert alert-success'>Cadastrou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar</div>"; 
			}
		break;
		case "editar":
			$sql = "UPDATE cliente SET
						idCliente={$idCliente},
						nome_cliente='{$nome_cliente}',
						cpf_cliente='{$cpf_cliente}',
						rg_cliente='{$rg_cliente}',
						num_tel_cliente='{$num_tel_cliente}'
					WHERE
						idCliente=".$_REQUEST["idCliente"];
						
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Editou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar</div>"; 
			}
		break;
		case "excluir":
			$sql = "DELETE FROM cliente WHERE idCliente=".$_REQUEST["idCliente"];
			
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Excluiu com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir</div>"; 
			}
		break;
	}
?>

<button href="index.php?pace=c_cliente" class="btn btn-primary">Voltar</button>
