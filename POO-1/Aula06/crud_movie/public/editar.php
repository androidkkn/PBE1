<?php
require_once __DIR__ . '/../repositories/FilmeRepository.php';

$enviouFormulario = $_SERVER['REQUEST_METHOD'] === 'POST';
$id = filter_input($enviouFormulario ? INPUT_POST : INPUT_GET, 'id', FILTER_VALIDATE_INT, [
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

if ($enviouFormulario) {
    try {
        $edicao = new Filme(
            $_POST['titulo'] ?? '',
            $_POST['genero'] ?? '',
            $_POST['ano'] ?? '',
            $_POST['avaliacao'] ?? '',
            $_POST['descricao'] ?? ''
        );

        $repo->atualizar($id, $edicao);
        header("Location: index.php");
        exit;
    } catch (InvalidArgumentException $e) {
        http_response_code(422);
        $erro = $e->getMessage();
    }
}
?>

<h1>Editar filme</h1>

<?php if (isset($erro)): ?>
    <p><?= htmlspecialchars($erro) ?></p>
<?php endif; ?>

<form method="post">
    <input type="hidden" name="id" value="<?= $id ?>">
    <input name="titulo" value="<?= htmlspecialchars($filme['titulo']) ?>" required><br>
    <input name="genero" value="<?= htmlspecialchars($filme['genero']) ?>" required><br>
    <input type="number" name="ano" value="<?= $filme['ano'] ?>" min="1000" max="9999" required><br>
    <input name="avaliacao" value="<?= htmlspecialchars($filme['avaliacao'] ?? '') ?>"
           placeholder="Avaliação de 0 a 10" inputmode="decimal"><br>
    <textarea name="descricao" placeholder="Descrição"><?= htmlspecialchars($filme['descricao'] ?? '') ?></textarea><br>
    <button>Atualizar</button>
    <a href="index.php">Cancelar</a>
</form>
