<?php
require_once '../repositories/ClienteRepository.php';

$repo = new ClienteRepository();

if ($_POST) {
	$cliente = new Cliente(
    	$_POST['nome'],
    	$_POST['email'],
    	$_POST['documento']
	);

	$repo->atualizar($_POST['id'], $cliente);
	header("Location: index.php");
}

$cliente = $repo->buscarPorId($_GET['id']);
?>

<form method="post">
	<input type="hidden" name="id" value="<?= $cliente['id'] ?>">
	<input name="nome" value="<?= $cliente['nome'] ?>"><br>
	<input name="email" value="<?= $cliente['email'] ?>"><br>
	<input name="documento" value="<?= $cliente['documento'] ?>"><br>
	<button>Atualizar</button>
</form>
