<?php
require_once __DIR__ . '/../repositories/FilmeRepository.php';

$repo = new FilmeRepository();
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1, 'max_range' => 2147483647],
]);
$filmes = [];

if ($id === null) {
    $filmes = $repo->listar();
} elseif ($id === false) {
    $mensagem = 'Informe um ID de filme válido.';
} else {
    $filme = $repo->buscarPorId($id);
    if ($filme === false) {
        $mensagem = 'Nenhum filme encontrado com esse ID.';
    } else {
        $filmes[] = $filme;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sistema de Filmes</title>
    <style>
        body {
            font-family: Arial;
            margin: 40px;
        }

        nav a {
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        th {
            background: #eee;
        }

        td form {
            display: inline;
        }
    </style>
</head>

<body>

    <h1>Sistema de Cadastro de Filmes</h1>

    <nav>
        <a href="index.php">📋 Listar Filmes</a>
        <a href="criar.php">➕ Novo Filme</a>
    </nav>

    <form method="get" action="index.php">
        <label for="id">Buscar por ID</label>
        <input type="number" id="id" name="id" min="1" max="2147483647"
            value="<?= $id === false ? '' : $id ?>" required>
        <button type="submit">Buscar</button>
    </form>

    <?php if (isset($mensagem)): ?>
        <p><?= $mensagem ?></p>
    <?php endif; ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Gênero</th>
            <th>Ano</th>
            <th>Avaliação</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>

        <?php foreach ($filmes as $filme): ?>
            <tr>
                <td><?= $filme['id'] ?></td>
                <td><?= htmlspecialchars($filme['titulo']) ?></td>
                <td><?= htmlspecialchars($filme['genero']) ?></td>
                <td><?= $filme['ano'] ?></td>
                <td><?= str_replace('.', ',', $filme['avaliacao'] ?? '') ?></td>
                <td><?= htmlspecialchars($filme['descricao'] ?? '') ?></td>
                <td>
                    <a href="editar.php?id=<?= $filme['id'] ?>">✏️ Editar</a> |
                    <form method="post" action="excluir.php" onsubmit="return confirm('Deseja excluir?')">
                        <input type="hidden" name="id" value="<?= $filme['id'] ?>">
                        <button type="submit">🗑️ Excluir</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>
