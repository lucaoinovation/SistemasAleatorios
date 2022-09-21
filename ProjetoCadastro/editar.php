<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        </head><body>
            
            <?php include_once 'conexao.php';
                include_once 'menu.php';
                
            $id=$_POST['id'];
            $sql="SELECT * FROM usuarios where id='$id'";
            $resultset = mysqli_query($connect, $sql);
            $linha = mysqli_fetch_assoc($resultset);
           
            ?>
            <form action="editados.php" method="post">
                
                <input type="hidden" name="id" value="<?=$linha['id']?>" > <br>      
                Nome <input  name="nome" type="text" value="<?= $linha['nome']; ?>" ><br>
                Sobrenome <input name="sobrenome" type="text" value="<?= $linha['sobrenome'];?>"><br>
                
                País <input name="pais" type="text" value="<?=$linha ['pais'];?>"><br>
                Estado <input name="estado" type="text" value="<?= $linha['estado'];?>"><br>
                Cidade <input name="cidade" type="text" value="<?= $linha['cidade'];?>"><br>
                E-mail <input name="email" type="text" value="<?= $linha['email']; ?>"><br>
                <input type="submit" class="btn btn-info" value="Editar" >  
  
            </form>
            </body>
   
        </html>
