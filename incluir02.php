<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="resultados.css">
    <title>Incluir</title>
</head>
<body>
    <h3>Incluindo</h3>
    <?php
        include_once('conexao.php');
        
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $editora = $_POST['editora'];
        $volumes = $_POST['volumes'];
        $idade = $_POST['idade'];
        $data = $_POST['data'];
        $inicio = $_POST['inicio'];
        $fim = $_POST['fim'];
        $sinopse = $_POST['sinopse'];
//criando a linha INSERT
        $sqlinsert = "insert into tabela02(id, titulo, autor, editora, volumes, idade, data, inicio, fim, sinopse) values($id, '$titulo', '$autor', '$editora', $volumes, $idade, $data, $inicio, $fim, '$sinopse')";

//executando SQL
        $resultados = @mysqli_query($conexao, $sqlinsert);
        if(!$resultados){
            echo '<input type="button" onclick="window.location=' . "'index.php'" . ';" value="Voltar" class="botao"><br><br>';
            die('<h4><b>Query Inválida:</b></h4>' . @mysqli_error($conexao));
        }
        else{
            echo "<h4>Registro Cadastrado com Sucesso</h4>";
        }
        
        mysqli_close($conexao);
    ?>
    <br><br>
    <input type='button' onclick="window.location = 'index.php';" value="Voltar" class="botao">
</body>
</html>