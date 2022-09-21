<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "oficina";
	
	//Criar a conexao
	$conn = new mysqli ($servidor, $usuario, $senha, $dbname) or die($conn);
	
	/*if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		echo "Conexao realizada com sucesso";
	}*/
	
?>