<?php

require __DIR__ . '/src/Modelo/Filme.php';

echo "Bem-vindo(a) ao Top Vídeo\n";

$filme = new Filme();
$filme->setAnoLancamento(2024);
$filme->setNome("Hora do horror");
$filme->setGenero("Terror");
// $filme->nome = "Thor - Ragnarok";
// $filme->anoLancamento = 2021;
// $filme->genero = "super-heroi";

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->getAnoLancamento() . "\n";
echo $filme->getNome() . "\n";
echo $filme->getGenero() . "\n";
