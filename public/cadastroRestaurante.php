<?php

include "../infra/conexao.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];

$sql = "INSERT INTO restaurante(nome, categoria, telefone, endereco) VALUES('$nome', '$categoria', '$telefone', '$endereco')";

mysqli_query($conexao, $sql);

}


?>

<h2> Cadastro de Restaurante </h2>

<form action="" method="POST">

<label for="nome"> Nome do Restaurante: </label>
<input type="text" name="nome">

<br>

<label for="nome"> Categoria do Restaurante: </label>
<input type="text" name="categoria">

<br>

<label for="nome"> Telefone do Restaurante: </label>
<input type="number" name="telefone">

<br>

<label for="nome"> Endereço do Restaurante: </label>
<input type="text" name="endereco">

<button type = "submit"> Enviar </button>

<br>

</form>