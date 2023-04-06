<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="produto.css">
    <title>Mangas</title>
</head>
<body>
    <h2 align="center">~~ Mangás de Romance ~~</h2>
    <?php
     function convertedata($data){
         $data_vetor = explode('-', $data);
         $novadata = implode('/', array_reverse($data_vetor));
         return $novadata;
     }
    
     include_once('conexao.php');
     if (isset($_GET['id']) && is_numeric(base64_decode($_GET['id']))) {
        $id = base64_decode($_GET['id']);
    } else {
        header('Location: index.php');
    }
     $query = mysqli_query($conexao, "select * from tabela02 where id = $id");

     if(!$query){
         die('Query Inválida: ' . @mysqli_error($conexao));
     }

     $dados = mysqli_fetch_array($query);

     echo "<table border='1px' align='center'><tr><td width='250px'>";
     if(empty($dados['manga'])){
         $imagem = 'SemImagem.png';
     }else{
         $imagem = $dados['manga'];
     }

     echo "<img src='imagens/$imagem' width='350px' heigth='350px'>";
     echo "</td><td class='descricao' width='400px'>";
     echo "<p><b>Data: </b>" . convertedata($dados['data']) . "</p><br>";
     echo "<p><b>Título: </b>" . $dados['titulo'] . "</p>";
     echo "<p><b>Autor: </b>" . $dados['autor'] . "</p>";
     echo "<p><b>Editora (BR): </b>" . $dados['editora'] . "</p>";
     echo "<p><b>Quantidade de Volumes: </b>" . $dados['volumes'] . "</p>";
     echo "<p><b>Idade: </b>" . $dados['idade'] . "</p>";
     echo "<p><b>Ano de Lançamento: </b>" . $dados['inicio'] . "</p>";
     echo "<p><b>Ano de Finalização: </b>" . $dados['fim'] . "</p>";
     echo "<p><b>Sinopse: </b>" . $dados['sinopse'] . "</p>";

     mysqli_close($conexao);
    ?>
    <a href="index.php" class="home">Home</a>
</body>
</html>