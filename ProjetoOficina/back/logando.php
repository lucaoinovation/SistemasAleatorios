<?php
// include("config.php");
//Iniciando a sessão
session_start();
 //varáveis para receber os dados
 $email_user = $_POST['email_user'];
 $senha_user = $_POST['senha_user'];

 //validando login
	$result = mysql_query("SELECT * FROM user_ofic WHERE nome = $email_user AND senha = '$senha_user'");
	if(mysql_num_rows($result) > 0){
	$_SESSION['email']= $email_user;
	$_SESSION['senha'] = $senha_user;
		header('location:index.php');
	} else{
		unset($_SESSION['email']);
		unset($_SESSION['senha']);
		header('location:login.php');
	}
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
 simplesmente não fazer o login e digitar na barra de endereço do seu navegador 
o caminho para a página principal do site (sistema), burlando assim a obrigação de 
fazer um login, com isso se ele não estiver feito o login não será criado a session, 
então ao verificar que a session não existe a página redireciona o mesmo
 para a index.php.*/
session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('location:login.php');
  }
 
$logado = $_SESSION['email'];