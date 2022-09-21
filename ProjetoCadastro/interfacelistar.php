<?php
include_once 'conexao.php';

$sqlselect = 'SELECT * FROM usuarios';
$operacaolista = mysqli_query($connect, $sqlselect);
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Lista de cadastrados</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
	<body>
            <?php 
            include_once 'menu.php';
            ?>
	<h1 align="center" >Cadastrados</h1>
	<form action="" method="post">
        <table class="table table-dark table-striped">
		<tr>
			<th>Nomes</th>
			<th>Sobrenomes</th>
			<th>País</th>
			<th>Estado</th>
			<th>Cidade</th>
			<th>E-mail</th>
			<th>Ação</th>

		</tr>
		
                
                    <?php while ($linha = mysqli_fetch_assoc($operacaolista)){?>
                <tr>
			<td><?=$linha['nome'];?></td>
			<td><?=$linha['sobrenome'];?></td>
			<td><?=$linha['pais'];?></td>
			<td><?=$linha['estado'];?></td>
			<td><?=$linha['cidade'];?></td>
			<td><?=$linha['email'];?></td>
			<td>
                            <button input class="btn btn-info" formaction="editar.php" name="id" value="<?=$linha['id'];?>" type="submit" >EDITAR</button>
                            <button input class="btn btn-danger" formaction="excluir.php" name="Excluir" value="<?=$linha['id'];?>"type="submit" >EXCLUIR</button>
			</td>
                 </tr>
		<?php }?>
                
		
                
		
	</table>
        </form>
	</body>
        <center><a href="index.php" ><input class="btn btn-dark btn-lg" type="button" value="Voltar"></a></center>
</html>
