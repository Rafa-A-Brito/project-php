<?php 
    $enderecoBD = "localhost";
    $banco = "escola";
    $usuarioBD = "root";
    $senhaBD = "";

    $conexao = new PDO("mysql:host=$enderecoBD; dbname=$banco", $usuarioBD, $senhaBD);
?>