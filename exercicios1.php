<?php

// 1 - Escreva um programa em PHP que exiba seu nome na tela.

$nome = $argv[1] ?? "Erro - Nome não informado!";

echo $nome;
echo "\n";

// 2 - Crie um programa em PHP que calcule a média de três notas e exiba o resultado.

$nota1 = 6;
$nota2 = 5;
$nota3 = 6;
$media = ($nota1 + $nota2 + $nota3) / 3;
echo $media;
echo "\n";

// 3 - Elabore um programa em PHP que receba um valor em metros e converta para centímetros.
$valorEmMetros = 2;
$valorEmCentimetros = $valorEmMetros * 100;

echo $valorEmCentimetros;
echo "\n";

// 4 - Desenvolva um programa em PHP que verifique se um ano é bissexto ou não.

$ano = 2024;

if (($ano % 4 && $ano % 100 != 0) || $ano % 400 == 0) {
    echo "$ano é bissexto.";
} else {
    echo "$ano não é bissexto.";
}
echo "\n";

// 5 - Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit.

$temperaturaEmCelsius = 30.4;
$temperaturaEmFahrenheit = $temperaturaEmCelsius * 1.8  + 32;

$mensagem = "A temperatura de $temperaturaEmCelsius é equivalente a $temperaturaEmFahrenheit Fahrenheit";

echo $mensagem;
