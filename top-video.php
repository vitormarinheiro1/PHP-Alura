<?php

echo "Bem-vindo ao Top Video!\n";

// $nomeFilme = "Se beber não case";
// $nomeFilme = "Thor: Ragnarok";
$nomeFilme = "Bad Boys 3";
$anoLancamento = $argv[1] ?? 2024;

$somaDeNotas = 10;
$somaDeNotas += 9.5;
$somaDeNotas += 8;
$somaDeNotas += 7.5;
$somaDeNotas += 6;

$notaFilme = $somaDeNotas / 5;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do Filme: $nomeFilme";
echo "\n";
// Interpolação
echo "Nota do Filme: $notaFilme";
echo "\n";

// Concatenação .
echo "Ano de Lançamento: " . $anoLancamento . "\n";

if ($anoLancamento > 2023) {
    echo "Esse filme é um lançamento.";
} elseif ($anoLancamento > 2020 && $anoLancamento <= 2023) {
    echo "Esse filme ainda é novo.";
} else {
    echo "Esse filme não é um lançamento.";
}
echo "\n";

// Match Expression
$genero = match ($nomeFilme) {
    "Bad Boys 3" => "Ação",
    "Thor: Ragnarok" => "Super-herói",
    "Se beber não case" => "Comédia",
    default => "Gênero desconhecido"
};

echo "O gênero do filme é: $genero";
