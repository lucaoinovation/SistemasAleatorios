<?php
include_once 'conexao.php';
$id = $_POST['Excluir'];
$sqlDelete="DELETE FROM usuarios WHERE id=$id";
mysqli_query($connect, $sqlDelete);
header('Location: interfacelistar.php');
?>

