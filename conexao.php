<?php
    $host = "localhost";
    $user = "root";
    $pass = "usbw";
    $banco = "manga";

    $conexao = mysqli_connect($host, $user, $pass, $banco)
    or die ("Problemas com a conexão do Banco de Dados");
    mysqli_set_charset($conexao, "UTF8");
?>