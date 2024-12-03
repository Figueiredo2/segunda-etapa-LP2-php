<?php

    include "conexao.php";

    if(isset($_POST['id'])) {
        // Entrada
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];

        // Processamento
        $sql = "update aluno set nome = '$nome', telefone = '$telefone' , email = '$email' where id = '$id'";
        $alterar = mysqli_query($conexao,$sql);

        // Saída - 

        if($alterar) {
            echo "
            
            <script> 
                alert('Registro Alterado com Sucesso!');
                window.location = 'listar_alunos.php';
            </script>
            ";
        }

    } else {
        echo "<p> Banco de Dados temporariamente fora do ar. Tente novamente mais tarde </p>
        <p> Clique <a href='alunos.php' > aqui </a> para acessar o formulário de cadastro </p>";
    }

?>