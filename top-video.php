<?php

echo "Bem-vindo ao Top Video!\n";

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
