<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../models/Filme.php';
require_once __DIR__ . '/../interfaces/RepositoryInterface.php';

class FilmeRepository implements RepositoryInterface {

    private $conn;

    public function __construct() {
        $this->conn = Database::conectar();
    }

    public function criar($filme) {
        $sql = "INSERT INTO filmes (titulo, genero, ano, avaliacao, descricao)
                VALUES (:titulo, :genero, :ano, :avaliacao, :descricao)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':titulo' => $filme->getTitulo(),
            ':genero' => $filme->getGenero(),
            ':ano' => $filme->getAno(),
            ':avaliacao' => $filme->getAvaliacao(),
            ':descricao' => $filme->getDescricao()
        ]);
    }

    public function listar() {
        $stmt = $this->conn->query("SELECT * FROM filmes ORDER BY id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarPorId($id) {
        $stmt = $this->conn->prepare("SELECT * FROM filmes WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar($id, $filme) {
        $sql = "UPDATE filmes
                SET titulo = :titulo, genero = :genero, ano = :ano,
                    avaliacao = :avaliacao, descricao = :descricao
                WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':titulo' => $filme->getTitulo(),
            ':genero' => $filme->getGenero(),
            ':ano' => $filme->getAno(),
            ':avaliacao' => $filme->getAvaliacao(),
            ':descricao' => $filme->getDescricao(),
            ':id' => $id
        ]);
    }

    public function excluir($id) {
        $stmt = $this->conn->prepare("DELETE FROM filmes WHERE id = :id");
        $stmt->execute([':id' => $id]);
    }
}
