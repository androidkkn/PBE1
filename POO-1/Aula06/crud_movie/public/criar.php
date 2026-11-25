<?php
require_once __DIR__ . '/../repositories/FilmeRepository.php';

if ($_POST) {
    try {
        $filme = new Filme(
            $_POST['titulo'] ?? '',
            $_POST['genero'] ?? '',
            $_POST['ano'] ?? '',
            $_POST['avaliacao'] ?? '',
            $_POST['descricao'] ?? ''
        );

        (new FilmeRepository())->criar($filme);
        header("Location: index.php");
        exit;
    } catch (InvalidArgumentException $e) {
        $erro = $e->getMessage();
    }
}
?>

<?php if (isset($erro)): ?>
    <p><?= htmlspecialchars($erro) ?></p>
<?php endif; ?>

<form method="post">
    <input name="titulo" placeholder="Título" required><br>
    <input name="genero" placeholder="Gênero" required><br>
    <input type="number" name="ano" placeholder="Ano" min="1000" max="9999" required><br>
    <input name="avaliacao" placeholder="Avaliação de 0 a 10" inputmode="decimal"><br>
    <textarea name="descricao" placeholder="Descrição"></textarea><br>
    <button>Salvar</button>
</form>
