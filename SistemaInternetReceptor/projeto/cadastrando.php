<html>
<head>
<title>Cadatrando...</title>
</head>
<body>
<?php
include_once 'conexao.php';

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$pais=$_POST['pais'];
$estado=$_POST['estado'];
$cidade=$_POST['cidade'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql = ("INSERT INTO usuarios(nome, sobrenome, pais, estado, cidade, email, senha)
VALUES('$nome', '$sobrenome', '$pais', '$estado', '$cidade', '$email', '$senha')");
$resultInserir = mysqli_query($connect,$sql);
echo "<center><h1>Cadastro efetuado com sucesso!</h1></center>";
?>
</body>
</html>
