<?php
include_once 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$pais = $_POST['pais'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$email = $_POST['email'];

$sqlEditar= "UPDATE usuarios SET nome = '$nome',sobrenome = '$sobrenome',pais = '$pais',estado = '$estado',cidade = '$cidade',email = '$email' WHERE id = $id";
$resultado= mysqli_query($connect, $sqlEditar);
var_dump($_POST);
header('Location: interfacelistar.php');
?>
