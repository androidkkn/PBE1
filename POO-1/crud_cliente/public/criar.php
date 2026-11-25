<?php
require_once '../repositories/ClienteRepository.php';

if ($_POST) {
	$cliente = new Cliente(
    	$_POST['nome'],
    	$_POST['email'],
    	$_POST['documento']
	);

	(new ClienteRepository())->criar($cliente);
	header("Location: index.php");
}
?>

<form method="post">
	<input name="nome" placeholder="Nome" required><br>
	<input name="email" placeholder="Email" required><br>
	<input name="documento" placeholder="CPF/CNPJ" required><br>
	<button>Salvar</button>
</form>
