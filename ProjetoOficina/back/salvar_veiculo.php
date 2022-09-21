<?php
	
	include("dao/conexao.php");
	
	$id_cliente = @$_REQUEST["id_cliente"];
	$nome_veiculo = @$_REQUEST["nome_veiculo"];
	$marca_veiculo = @$_REQUEST["marca_veiculo"];
	$ano_veiculo = @$_REQUEST["ano_veiculo"];
	$placa_veiculo = @$_REQUEST["placa_veiculo"];
	$modelo_veiculo = @$_REQUEST["modelo_veiculo"];
	

	switch($_REQUEST["acao"]){
		case "cadastrar":
		$sql = "INSERT INTO veiculo (id_cliente, nome_veiculo, marca_veiculo, ano_veiculo, placa_veiculo, modelo_veiculo) 
		VALUES ('{$id_cliente}', '{$nome_veiculo}', '{$marca_veiculo}', '{$ano_veiculo}', '{$placa_veiculo}', '{$modelo_veiculo}')";
		
		$resultado = $conn->query($sql) or die ($conn->error);
		
		"</br>";
		"</br>";
		
		if($resultado==true){
			echo "<div class='alert alert-success'>Cadastrado com sucesso!!</div>";
		} else{
			echo"<div class='alert alert-danger'>Não foi possível cadastrar!!</div>";
		}
		break;		
			
		case "editar":
			$sql = "UPDATE veiculo SET
						
						id_cliente='{$id_cliente}',
						nome_veiculo='{$nome_veiculo}',
						marca_veiculo='{$marca_veiculo}',
						ano_veiculo='{$ano_veiculo}',
						placa_veiculo='{$placa_veiculo}',
						modelo_veiculo='{$modelo_veiculo}'
					WHERE
						idVeiculo=".$_REQUEST["idVeiculo"];
						
			$result = $conn->query($sql) or die ($conn->error);
			
			if($result==true){
				print "<div class='alert alert-success'>Editou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar</div>"; 
			}
		break;
		
		case "excluir":
			$sql = "DELETE FROM veiculo WHERE idVeiculo=".$_REQUEST["idVeiculo"];
			
			$result = $conn->query($sql) or die ($conn->error);
			
			if($result==true){
				print "<div class='alert alert-success'>Excluiu com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir</div>"; 
			}
		break;
		}
	
 ?>
 <a href="index.php?page=l_veiculo" class="btn btn-primary"><button class="btn btn-primary">Voltar</button></a>