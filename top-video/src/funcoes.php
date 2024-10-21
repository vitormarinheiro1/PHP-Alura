<?php

function exibeMensagemLancamento(int $ano): void
{
    if ($ano > 2023) {
        echo "Esse filme é um lançamento.";
    } elseif ($ano > 2020 && $ano <= 2023) {
        echo "Esse filme ainda é novo.";
    } else {
        echo "Esse filme não é um lançamento.";
    }
    echo "\n";
}

function incluidoNoPlano(bool $plano, int $ano): bool
{
    return $plano || $ano < 2020;
}

function criaFilme(string $nome, int $anoLancamento, float $nota, string $genero): Filme
{
    $filme = new Filme();
    $filme->nome = $nome;
    $filme->anoLancamento = $anoLancamento;
    $filme->genero = $genero;
    $filme->nota = $nota;

    return $filme;
}
