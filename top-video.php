<?php

function exibeMensagemLancamento(int $ano): void {
    if ($ano > 2023) {
        echo "Esse filme é um lançamento.";
    } elseif ($ano > 2020 && $ano <= 2023) {
        echo "Esse filme ainda é novo.";
    } else {
        echo "Esse filme não é um lançamento.";
    }
    echo "\n";
}

function incluidoNoPlano(bool $plano, int $ano): bool {
    return $plano || $ano < 2020;
}

echo "Bem-vindo ao Top Video!\n";

// $nomeFilme = "Se beber não case";
// $nomeFilme = "Thor: Ragnarok";
$nomeFilme = "Bad Boys 3";
$anoLancamento = 2024;

$quantidadeDeNotas = $argc - 1;
$notas = [];

// inicializacao; condicao da repeticao; incremento
for ($contador = 1; $contador < $argc; $contador ++) {
    $notas[] = (float) $argv[$contador];
}

// $somaDeNotas = 0;
// foreach ($notas as $nota) {
//     $somaDeNotas += $nota;
// }



// USO DO WHILE
// $contador = 1;
// while ($argv[$contador] != 0) {
//     $somaDeNotas += $argv[$contador++];
// }


$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do Filme: $nomeFilme";
echo "\n";
// Interpolação
echo "Nota do Filme: $notaFilme";
echo "\n";

// Concatenação .
echo "Ano de Lançamento: " . $anoLancamento . "\n";

exibeMensagemLancamento($anoLancamento);

// Match Expression
$genero = match ($nomeFilme) {
    "Bad Boys 3" => "Ação",
    "Thor: Ragnarok" => "Super-herói",
    "Se beber não case" => "Comédia",
    default => "Gênero desconhecido"
};

echo "O gênero do filme é: $genero\n";

// var_dump

// array associativo
$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "Super-herói",
];

// echo $filme["nome"];
