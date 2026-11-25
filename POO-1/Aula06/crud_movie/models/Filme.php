<?php

class Filme {
    private $titulo;
    private $genero;
    private $ano;
    private $avaliacao;
    private $descricao;

    public function __construct($titulo, $genero, $ano, $avaliacao, $descricao) {
        if (!is_string($titulo) || !is_string($genero) || !is_string($descricao)
            || trim($titulo) === '' || trim($genero) === '') {
            throw new InvalidArgumentException('Preencha o título e o gênero com valores válidos.');
        }

        $ano = filter_var($ano, FILTER_VALIDATE_INT, [
            'options' => ['min_range' => 1000, 'max_range' => 9999],
        ]);
        if ($ano === false) {
            throw new InvalidArgumentException('Informe um ano com quatro dígitos.');
        }

        if (!is_string($avaliacao)) {
            throw new InvalidArgumentException('Informe uma avaliação válida.');
        }
        $avaliacao = str_replace(',', '.', trim($avaliacao));
        if ($avaliacao !== '' && !preg_match('/\A(?:[0-9](?:\.[0-9])?|10(?:\.0)?)\z/', $avaliacao)) {
            throw new InvalidArgumentException('Informe uma avaliação de 0 a 10, com até uma casa decimal.');
        }

        $this->titulo = trim($titulo);
        $this->genero = trim($genero);
        $this->ano = $ano;
        $this->avaliacao = $avaliacao === '' ? null : $avaliacao;
        $this->descricao = $descricao;
    }

    public function getTitulo() { return $this->titulo; }
    public function getGenero() { return $this->genero; }
    public function getAno() { return $this->ano; }
    public function getAvaliacao() { return $this->avaliacao; }
    public function getDescricao() { return $this->descricao; }
}
