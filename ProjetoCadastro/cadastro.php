<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<title>Sistema de Cadastro</title>
</head>
    <body>
        <?php
        include_once 'menu.php';
        ?>
	<h1 align="center" ><div class="alert alert-dark" role="alert">Preencha os seus dados</div>
            <form class="form-group" name ="signup" method="post" action="cadastrando.php">
                Nome: <input type="text" name="nome"/>
                <br/><br/>
                Sobrenome: <input type="text" name="sobrenome"/>
                <br/><br/>
                País: <input type="text" name="pais"/>
                <br/><br/>
                Estado: <input type="text" name="estado"/>
                <br/><br/>
                Cidade: <input type="text" name="cidade"/>
                <br/><br/>
                E-mail: <input type="text" name="email"/>
                <br/><br/>
                Senha: <input type="password" name="senha"/>
                <br/><br/>
                <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
                <button formaction="index.php" class="btn btn-dark btn-lg" href="index.php">Voltar</button>

            </form>
    </body>
</html>
