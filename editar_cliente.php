<?php

    include "conexao.php";

    if(isset($_GET['id'])){
        
        $id = $_GET['id'];
        
       
        $sql = "select * from cliente where id = $id";
        $seleciona = mysqli_query($conexao,$sql);
        $exibe = mysqli_fetch_array($seleciona); 

         $nome = $exibe['nome'];
         $telefone = $exibe['telefone'];
         $email = $exibe['email'];
         



?>



<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
  </head>
  <body>
  <div class = "container">
    <h1 class = "mt-3 text-center">Edição de Clientes</h1>
    <hr>
    
        <form name="edicao" method="post" action="update_clientes.php">
          <input type="hidden" name="id" value="<?=$id?>">
          <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelp" value="<?php echo $nome?>" required>
        <div id="emailHelp" class="form-text"></div>
          </div>

          <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="number" class="form-control" id="telefone" name="telefone" value="<?php echo $telefone?>" required>
          </div>
          
          <div class="mb-3">
              <label class="email" for="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="<?php echo $email?>" required>
          </div>
          <!--Nunca esquecer de colocar os names!-->

          <div class="mb-3 text-end">
            <button type="submit" class="btn btn-primary" class="btn btn-primary">Editar</button>
            <input type="button"  class="btn btn-warning" onclick="history.go(-1)" value="Voltar">
          </div>

        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
    <?php 
    } else{
        echo "
        <p> Esta é uma página de tratamento de dados </p>
        <p> Clique <a href='clientes.php' > aqui </a> para acessar o formulário de cadastro </p>
        ";
    }
    ?>