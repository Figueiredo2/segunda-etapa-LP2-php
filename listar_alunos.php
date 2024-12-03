<?php

    include "conexao.php";

    $sql = "select * from aluno order by id";
    $seleciona = mysqli_query($conexao, $sql);
      
      


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listagem de Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/listar_produtos.css">
  </head>
  <body>
    <div class = "container">
    <div class="text-end mt-5">
        <a href="alunos.php">
          <button class="btn btn-success">Cadastrar Novo</button>
      </a>
      </div>
 
    <h1 class="text-center mt-5 mb-5 ">Lista de Alunos</h1>

    <div class="row bg-dark text-light text-center ">
        <div class="col-2"> id </div>
        <div class="col-3">Nome</div>
        <div class="col-3">Telefone</div>
        <div class="col-2">Email</div>
        <div class="col-2">Foto</div>
    </div>

 
    <?php
    while ($exibe = mysqli_fetch_array($seleciona)) { 
      $id = $exibe['id'];
    ?>

    

    <div class="row text-center">
        <div class="col-2 bg-dark-subtle"><?php echo $exibe['id']?></div>
        <div class="col-3 bg-dark-subtle"><?php echo $exibe['nome']?></div>
        <div class="col-3 bg-dark-subtle"><?php echo $exibe['telefone']?></div>
        <div class="col-2 bg-dark-subtle"><?php echo $exibe['email']?></div>
        <div class="col-2 bg-dark-subtle icones">
          <a href="ver_aluno.php?id=<?php echo $id?>"> <img src="img/ver.png" alt=""></a>
          <a href="editar_aluno.php?id=<?php echo $id?>"><img src="img/editar.png" alt=""></a>
          <a href="excluir_aluno.php?id=<?php echo $id?>" onclick="return confirm('Confirma a Exclusão do Registro?')"><img src="img/delete.png" alt=""></a>
        </div>
        
    </div>

    <?php
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>