<?php include('menu.php');

if(isset($_POST['enviar']))
{
    $nome_produto=$_POST['nome_produto'];
    $descricao_produto=$_POST['descricao_produto'];
    $preco_produto=$_POST['preco_produto'];
    $codigo_barras=$_POST['codigo_barras'];
    $fornecedor_produto=$_POST['fornecedor_produto'];
    $qtd_estoque=$_POST['qtd_estoque'];
    $fotos_produto=$_FILES['fotos_produto']['name'];
    $temp_name = $_FILES['fotos_produto']['tmp_name'];
    $localimage = "fotos_produtos/";
    
    $upload = move_uploaded_file($temp_name, $localimage.$fotos_produto);
    
    if($upload){
        echo 'Imagem Salva com sucesso!';
    }
    else
    {
        echo 'Não foi possível salvar a imagem!';
    }
   
    // $locationFoto= $_FILES['fotos_produto']['tmp_name'];
   // $query = mysqli_query($link, "insert into produtos (fotos_produto) values ('$fotos_produto')");
   // move_uploaded_file($locationFoto, 'fotos_produto/'.$fotos_produto);
    
    
    $sql="insert into produtos
         (nome_produto, descricao_produto, preco_produto, codigo_barras,
         fornecedor_produto, qtd_estoque, fotos_produto)
         values
         ('$nome_produto', '$descricao_produto', $preco_produto, '$codigo_barras',
         '$fornecedor_produto', $qtd_estoque, '$fotos_produto')";
         if ($sql) 
    {
    echo "<div class='success'>Produto adicionado com sucesso.</div>";
    }
    else{
        echo "<div class='error'>Erro ao adicionar o produto.</div>";
    }

    mysqli_query($sistema_vendas,$sql);
}
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Cadastro de Produtos</title>
        <link rel="stylesheet" href="/styles.css">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	</head>
	<body>
        <h1>Lista de Produtos</h1>

        <br>


            <form method="post" enctype="multipart/form-data" action="cadastro_produtos.php">
            Nome do Produto:<br>
            <input type="text" name="nome_produto">
            <br><br>
            Descrição do Produto:<br>
            <input type="text" name="descricao_produto">
            <br><br>
            Preço do Produto:<br>
            <input type="text" name="preco_produto">
            <br><br>
            Código de Barras:<br>
            <input type="text" name="codigo_barras">
            <br><br>
            Fornecedor do Produto:<br>
            <input type="text" name="fornecedor_produto">
            <br><br>
            Quantidade em estoque:<br>
            <input type="text" name="qtd_estoque">
            <br><br>
            Foto do Produto:<br>
            <input type="file" name="fotos_produto">
            <br><br>
            <input type="submit" name="enviar" value="Incluir na lista">
            </form>

            






