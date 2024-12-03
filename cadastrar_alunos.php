<?php
    include "conexao.php";

    if(isset($_POST['nome'])) {
    
        $nome = trim($_POST['nome']);
        $telefone = trim($_POST['telefone']);
        $email = trim($_POST['email']);

   
        $sql = "insert into aluno(nome,telefone,email) values ('$nome', '$telefone', '$email')";

        $cadastrar = mysqli_query($conexao, $sql);


        if($cadastrar) {
            echo "
            <script>
                alert('Aluno Cadastrado com Sucesso!');
                window.location = 'listar_alunos.php';
            </script>
            ";
        } else {
            echo "
                <p>Banco de dados Temporariamente fora do ar. Tente novamente mais tarde. Entre em contato com o administração do site para reportar o problema. </p>

                <p> Clique <a href='alunos.php' >aqui </a> para retornar ao formulário de cadastro </p>
            ";
        }

    } else {
        echo "
        <p> Esta é uma página de tratamento de dados </p>
        <p> Clique <a href='alunos.php' > aqui </a> para acessar o formulário de cadastro </p>
        ";
    }

?>