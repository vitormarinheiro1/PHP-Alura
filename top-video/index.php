<?php

require __DIR__ . '/src/Modelo/Filme.php';

echo "Bem-vindo(a) ao Top Vídeo\n";

$filme = new Filme(
    'Thor: Ragnarok 2',
    2021,
    'Super-heroi'
);
// $filme->setAnoLancamento(2024);
// $filme->setNome("Hora do horror");
// $filme->setGenero("Terror");

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento . "\n";
echo $filme->nome . "\n";
echo $filme->genero . "\n";
