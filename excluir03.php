<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="resultados.css">
    <title>Excluir</title>
</head>
<body>
    <h3>Excluindo</h3>
    <?php
        include_once('conexao.php');
        $id = $_POST['id'];

        $sqlconsulta = "select * from tabela02 where id = $id";

        $resultado = @mysqli_query($conexao, $sqlconsulta);
        if (!$resultado) {
            echo '<input type="button" onclick="window.location=' . "'index.php'" . ';" value="Voltar"><br><br>';
            die('<b>Query Inválida:</b>' . @mysqli_error($conexao));
        } else {
            $num = @mysqli_num_rows($resultado);
            if ($num == 0) {
                echo "<b>Id: </b>não localizado !!!!<br><br>";
                echo '<input type="button" onclick="window.location=' . "'excluir01.php'" . ';" value="Voltar"><br><br>';
                exit;
            } else {
                $dados = mysqli_fetch_array($resultado);
            }
        }
        mysqli_close($conexao);
    ?>
    <div class="manga">
    Id:<input type="number" value="<?php echo $dados['id'];?>" readonly><br><br>
    Titulo: <input type="text" value="<?php echo $dados['titulo'];?>" readonly><br><br>
    Autor: <input type="text" value="<?php echo $dados['autor'];?>" readonly><br><br>
    Editora: <input type="text" value="<?php echo $dados['editora'];?>" readonly><br><br>
    Quantidade de Volumes: <input type="number" value="<?php echo $dados['volumes'];?>" readonly><br><br>
    Idade: <input type="number" value="<?php echo $dados['idade'];?>" readonly><br><br>
    Data da Inclusão: <input type="date" value="<?php echo $dados['data'];?>" readonly><br><br>
    Ano de Início: <input type="number" value="<?php echo $dados['inicio']; ?>"><br><br>
    Ano de Finalização: <input type="number" value="<?php echo $dados['fim'];?>" readonly><br><br>
    Sinopse: <br><textarea value="<?php echo $dados['sinopse'];?>" rows='4' cols='50' style="resize: none;" readonly></textarea><br><br>
    
    <form action="excluir02.php" name="manga" method="post">
        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
        <input type="submit" value="Excluir" class="botao">
        <input type="button" onclick="window.location = 'excluir01.php';" value="Voltar" class="botao">
    </form>
</div>
</body>
</html>