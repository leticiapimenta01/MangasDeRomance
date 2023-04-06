<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="resultados.css">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Consultando</title>
</head>
<body>
    <h3>Consultado</h3>
    <?php
        include_once('conexao.php');
        $id = $_POST['id'];

        $sqliconsulta = "select * from tabela02 where id = $id";

        $resultado = @mysqli_query($conexao, $sqliconsulta);
        if(!$resultado){
            echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br><br>';
            die('Query Inválida' . @mysqli_error($conexao));
        }else{
            $num = @mysqli_num_rows($resultado);
            if($num==0){
                echo "Id não localizado!!!<br><br>";
                echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br><br>';
                exit;
            }else{
                $dados=mysqli_fetch_array($resultado);
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
    <input type='button' onclick="window.location='index.php';" value="Voltar" class="botao">
    </div>
</body>
</html>