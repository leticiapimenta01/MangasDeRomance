<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="exercicio03.css">
    <title>Mangas</title>
</head>
<body>
    <h2 align="center">~~~~~~~ Mangás de Romance ~~~~~~~</h2>
    <nav>
        <ul class="menu">
            <li><a href="incluir01.php"><img src="imagens/incluir.png" heigth='50px' width='50px'></a></li>
           <li><a href="excluir01.php"><img src="imagens/excluir.png" heigth='50px' width='50px'></a></li>
           <li><a href="consultar01.php"><img src="imagens/consultar.png" heigth='50px' width='50px'></a></li>
            <li><a href="alterar01.php"><img src="imagens/alterar.png" heigth='50px' width='50px'></a></li>
        </ul>
    </nav>
    <?php
        function convertedata($data) {
        $data_vetor = explode('-', $data);
        $novadata = implode('/', array_reverse($data_vetor));
        return $novadata;
    }
        include_once('conexao.php');

        $query = mysqli_query($conexao, "select * from tabela02 order by titulo");

        if(!$query){
            die('Query Inválida: '. @mysqli_error($conexao));
        }

        echo "<table border='1px' align='center'>
            <tr><th width='200px'>Id</th>
            <th width='200px'>Título (BR)</th>
            <th width='200px' >Autor</th>
            <th width='200px'>Quant. Volumes</th>
            <th width='200px'>Classificação de idade</th>
            <th width='200px'>Data</th>
            <th width='200px'>Mangá</th>";

        while ($dados = mysqli_fetch_array($query)){
            echo "<tr align='center'>";
            echo "<td>" . $dados['id'] . "</td>";
            echo "<td>" . $dados['titulo']. "</td>";
            echo "<td>" . $dados['autor'] . "</td>";
            echo "<td>" . $dados['volumes'] . "</td>";
            echo "<td>" . $dados['idade'] . "</td>";
            echo "<td>" . convertedata($dados['data']) . "</td>";
            
            if(empty($dados['manga'])){
                $imagem = 'SemImagem.png';
            }else{
                $imagem = $dados['manga'];
            }
            
            $id = base64_encode($dados['id']);
            echo "<td><a href='verProduto.php?id=$id'><img src='imagens/$imagem' width='100px' heigth='100px'></a></td>";
            echo "</tr>";
        }
        echo "</table>";

        mysqli_close($conexao);
    ?>
</body>
</html>