<?php

include "../infra/conexao.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];

$sql = "INSERT INTO cliente(nome, email, telefone, endereco) VALUES('$nome', '$email', '$telefone', '$endereco')";

mysqli_query($conexao, $sql);

}


?>

<h2> Cadastro de Clientes </h2>

<form action="" method="POST">

<label for="nome"> Nome do Cliente: </label>
<input type="text" name="nome">

<br>

<label for="nome"> Email do Cliente: </label>
<input type="email" name="email">

<br>

<label for="nome"> Telefone do Cliente: </label>
<input type="number" name="telefone">

<br>

<label for="nome"> Endereço do Cliente: </label>
<input type="text" name="endereco">

<button type = "submit"> Enviar </button>

<br>

</form>