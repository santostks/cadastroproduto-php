<?php
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $banco="sistema_vendas";

    $vendas=mysqli_connect($servidor,$usuario,$senha,$banco);
    mysqli_query($vendas,"SET NAMES UTF8");

    if(mysqli_connect_errno())
    {
        echo "Falha na conexão com o banco de dados Vendas";
    }
?>


<?php
if(isset($_GET['excluir']))
{
    $id=$_GET['excluir'];
    $sql="delete from produtos where id_produto=$id";
    mysqli_query($vendas,$sql);
}
?>





