<?php include('menu.php')?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Cadastro de Produtos</title>
		<meta charset="utf-8" />
		<meta name="viewport" method="POST"/>
	</head>
	<body>
        <h1>Listagem de Produtos</h1>
        <link rel="stylesheet" href="styles.css">
        <table class="tbl-full">
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Cód. Barras</th>
            <th>Fornecedor</th>
            <th>Estoque</th>
            <th>Foto</th>
        </tr>
    
<?php
        $sql="select * from produtos";
        $resultado=mysqli_query($sistema_vendas,$sql);
        while ($dados=mysqli_fetch_array($resultado))
        {
            echo "<tr>";
            echo "<td>".$dados['id_produto']."</td>";
            echo "<td>".$dados['nome_produto']."</td>";
            echo "<td>".$dados['descricao_produto']."</td>";
            echo "<td>".$dados['preco_produto']."</td>";
            echo "<td>".$dados['codigo_barras']."</td>";
            echo "<td>".$dados['fornecedor_produto']."</td>";
            echo "<td>".$dados['qtd_estoque']."</td>";
            echo "<td><img src=\"".$dados['fotos_produto']."\" width=100 ></td>";
            echo "</tr>";

        }
?>
</Table>        
