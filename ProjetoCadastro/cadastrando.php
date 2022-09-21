<html>
<head>
<title>Cadatrando...</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once 'conexao.php';
        include_once 'menu.php';

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
    <div class="botaoVoltar">
        <a align="center" href="index.php" ><input class="btn btn-dark" type="button" value="Voltar"></a>
    </div>
</html>
