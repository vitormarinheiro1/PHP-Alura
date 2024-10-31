<?php

class Filme
{
    private array $notas;

    public function __construct(
        private string $nome,
        private int $anoLancamento,
        private string $genero
    )
    {
        $this->notas = [];
    }

    public function avalia(float $nota): void
    {
        $this->notas[] = $nota;
    }

    public function media(): float
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }

    // GETTER
    public function getAnoLancamento(): int
    {
        return $this->anoLancamento;
    }

    // SETTER
    // public function setAnoLancamento(int $anoLancamento): void
    // {
    //     $this->anoLancamento = $anoLancamento;
    // }

    public function getNome(): string
    {
        return $this->nome;
    }

    // public function setNome(string $nome): void
    // {
    //     $this->nome = $nome;
    // }

    public function getGenero(): string
    {
        return $this->genero;
    }

    // public function setGenero(string $genero): void
    // {
    //     $this->genero = $genero;
    // }
}
