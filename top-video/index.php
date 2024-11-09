<?php

require __DIR__ . "/src/Modelo/Avaliavel.php";
require __DIR__ . '/src/Modelo/Genero.php';
require __DIR__ . '/src/Modelo/Titulo.php';
require __DIR__ . '/src/Modelo/Episodio.php';
require __DIR__ . '/src/Modelo/Filme.php';
require __DIR__ . '/src/Modelo/Serie.php';
require __DIR__ . '/src/Calculos/CalculadoraDeMaratona.php';
require __DIR__ . "/src/Calculos/ConversorNotaEstrela.php";

echo "Bem-vindo(a) ao Top Vídeo\n";

$filme = new Filme(
    'Thor: Ragnarok 2',
    2021,
    Genero::SuperHeroi,
    180
);
// $filme->setAnoLancamento(2024);
// $filme->setNome("Hora do horror");
// $filme->setGenero("Terror");


$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento . "\n";
echo $filme->nome . "\n";

$serie = new Serie('Lost', 2009, Genero::Acao, 10, 20, 30);
$episodio = new Episodio($serie, 'Episódio piloto', 1);

echo $serie->anoLancamento . "\n";

$serie->avalia(8);

echo $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona, você precisa de $duracao minutos" . PHP_EOL;

$conversor = new ConversorNotaEstrela();

echo $conversor->converte($serie) . PHP_EOL;
echo $conversor->converte($filme);
