<?php 

    $dbhost = 'Localhost';
    $dbUser = 'root'
    $dbPassword = '';
    $dbName = 'cadastro'

    $conexao = new mysqli($dbhost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else 
    {
        echo "Sucesso";
    }
?>