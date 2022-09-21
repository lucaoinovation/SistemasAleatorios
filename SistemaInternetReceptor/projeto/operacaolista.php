<?php
include_once 'conexao.php';
$sqlselect = 'SELECT * FROM usuarios';
$operacaolista = mysql_query($conexao, $sqlselect);
?>