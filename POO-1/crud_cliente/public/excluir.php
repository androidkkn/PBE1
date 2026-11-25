<?php
require_once '../repositories/ClienteRepository.php';

(new ClienteRepository())->excluir($_GET['id']);
header("Location: index.php");
?>
