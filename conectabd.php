<?php
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $banco="sistema_vendas";

    $sistema_vendas=mysqli_connect($servidor,$usuario,$senha,$banco);
    mysqli_query($sistema_vendas,"SET NAMES UTF8");

    if(mysqli_connect_errno())
    {
        echo "Falha na conexão com o banco de dados Vendas";
    }
?>