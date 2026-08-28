<?php

$host = "localhost";
$username = "root";
$password = "root";
$db = "atividade_10";

$conexao = new mysqli($host, $usenrame, $password, $db);

if($conexao->connect_error){

die("Erro na conexão com o banco de dados." . $conexao->connect_error);

};

$conexao-> set_charset("utf8mb4");

?>

