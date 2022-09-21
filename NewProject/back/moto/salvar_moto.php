<?php
	
	include("conexao.php");
	
	$nome_moto = @$_REQUEST["nome_moto"];
	$modelo_moto = @$_REQUEST["modelo_moto"];
	$marca_moto = @$_REQUEST["marca_moto"];
	$ano_moto = @$_REQUEST["ano_moto"];
	$placa_moto = @$_REQUEST["placa_moto"];
	

	switch($_REQUEST["acao"]){
		case "cadastrar":
		$sql = "INSERT INTO  oficina_moto (nome_moto, modelo_moto, marca_moto, ano_moto, placa_moto) VALUES ('{$nome_moto}', '{$modelo_moto}','{$marca_moto}', '{$ano_moto}', '{$placa_moto}')";
		
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
			$sql = "UPDATE moto SET
					
						nome_moto='{$nome_moto}',
						modelo_moto='{$modelo_moto}',
						marca_moto='{$marca_moto}',
						ano_moto='{$ano_moto}',
						placa_moto='{$placa_moto}'
					WHERE
						id_moto=".$_REQUEST["id_moto"];
						
			$result = $conn->query($sql) or die ($conn->error);
			
			if($result==true){
				print "<div class='alert alert-success'>Editou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar</div>"; 
			}
		break;
		case "excluir":
			$sql = "DELETE FROM moto WHERE id_moto=".$_REQUEST["id_moto"];
			
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Excluiu com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir</div>"; 
			}
		break;
		

		}		
		
	
	


?>