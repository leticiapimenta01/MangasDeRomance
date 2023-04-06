<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="resultados.css">
    <title>Alterado</title>
</head>
<body>
    <h3>Alterar</h3>
    <?php
        include_once('conexao.php');
        $id = $_POST['id'];

        $sqlconsulta = "select * from tabela02 where id = $id";
        
        $resultado = @mysqli_query($conexao, $sqlconsulta);
        if(!$resultado){
            echo '<input type="button" onclick="window.location=' . "'index.php'" . ';" value="Voltar"><br><br>';
            die('<b>Query Inválida:</b>' . @mysqli_error($conexao));
        }else{
            $num = @mysqli_num_rows($resultado);
            if ($num == 0) {
                echo "<b>Id: </b>não localizado !!!!<br><br>";
                echo '<input type="button" onclick="window.location=' . "'alterar01.php'" . ';" value="Voltar"><br><br>';
                exit;
            } else {
                $dados = mysqli_fetch_array($resultado);
            }
        }
        mysqli_close($conexao);
    ?>
    <form action="alterar02.php" name="manga" method="post" class="manga">
        Id:<input type="number" name="id" value='<?php echo $dados['id'];?>' readonly><br><br>
        Titulo: <input type="text" name="titulo" value="<?php echo $dados['titulo'];?>" ><br><br>
        Autor: <input type="text" name="autor" value="<?php echo $dados['autor'];?>" ><br><br>
        Editora: <input type="text" name="editora" value="<?php echo $dados['editora'];?>" ><br><br>
        Quantidade de Volumes: <input type="number" name="volumes" value="<?php echo $dados['volumes'];?>" ><br><br>
        Idade: <input type="number" name="idade" value="<?php echo $dados['idade'];?>" ><br><br>
        Data da Inclusão: <input type="date" name="data" value="<?php echo $dados['data'];?>" ><br><br>
        Ano de Início: <input type="number" name="inicio" value="<?php echo $dados['inicio']; ?>"><br><br>
        Ano de Finalização: <input type="number" name="fim" value="<?php echo $dados['fim'];?>" ><br><br>
        Sinopse: <br><textarea name="sinopse" value="<?php echo $dados['sinopse'];?>" rows='4' cols='50' style="resize: none;" ></textarea><br><br>
        <input type="submit" value="Ok" class="botao">&nbsp;&nbsp;
        <input type="reset" value="Limpar" class="botao">&nbsp;&nbsp;
        <input type='button' onclick="window.location = 'alterar01.php';" value="Voltar" class="botao">
    </form>
    
</body>
</html>