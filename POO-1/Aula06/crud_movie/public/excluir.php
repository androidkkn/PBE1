<?php
require_once __DIR__ . '/../repositories/FilmeRepository.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Allow: POST');
    http_response_code(405);
    exit('Use o botão Excluir na listagem de filmes.');
}

$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1, 'max_range' => 2147483647],
]);
if (!$id) {
    http_response_code(400);
    exit('Informe um ID de filme válido.');
}

$repo = new FilmeRepository();
$filme = $repo->buscarPorId($id);
if ($filme === false) {
    http_response_code(404);
    exit('Filme não encontrado.');
}

$repo->excluir($id);
header("Location: index.php");
exit;
