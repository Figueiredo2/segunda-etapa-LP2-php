<?php

    include "conexao.php";

    if(isset($_GET['id'])) {
        // Entrada
        $id = $_GET['id'];

        // Processamento 

        $sql = "delete from produto where id = '$id'";
        $excluir = mysqli_query($conexao, $sql); 

        if($excluir) {
            echo "
                <script>
                    alert('Registro Excluído com Sucesso!');
                    window.location = 'listar_produtos.php';
                </script>
            ";

          
        } else {
            echo "
                <p> Banco de Dados Temporariamente fora do ar. Tente novamente mais tarde. </p>
                <p> Entre em contato com o administrador do Site... </p>
            ";
            echo mysqli_error($conexao);
        }
    } else {
        echo "
        <p> Esta é uma página de tratamento de dados </p>
        <p> Clique <a href='produtos.php' > aqui </a> para acessar o formulário de cadastro </p>
        ";
    }

?>