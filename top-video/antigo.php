<?php

require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/funcoes.php";

echo "Bem-vindo ao Top Video!\n";

// $nomeFilme = "Se beber não case";
// $nomeFilme = "Thor: Ragnarok";
$nomeFilme = "Bad Boys 3";
$anoLancamento = 2024;

$quantidadeDeNotas = $argc - 1;
$notas = [];

// inicializacao; condicao da repeticao; incremento
for ($contador = 1; $contador < $argc; $contador++) {
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
$filme = criaFilme(
    nome: "Thor: Ragnarok",
    anoLancamento: 2021,
    nota: 7.8,
    genero: "Super-herói"
);

// echo $filme["nome"];
var_dump($notas);
sort($notas);
echo min($notas);
echo "\n";

// var_dump(strpos($filme['nome'], ':'));
$posicaoDoisPontos = strpos($filme->nome, ':');
var_dump($posicaoDoisPontos);

var_dump(substr($filme->nome, 0, $posicaoDoisPontos));

// echo json_encode($filme);
// var_dump(json_decode('{"nome":"Thor: Ragnarok","ano":2021,"nota":7.8,"genero":"Super-her\u00f3i"}', true));

$filmeComoStringJson = json_encode($filme);

file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);
