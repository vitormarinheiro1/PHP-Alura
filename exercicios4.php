<?php

// 1. Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e
// retorne o resultado da operação.

function operacaoMatematica(int $numero1, int $numero2, string $operacao): float
{
    return match ($operacao) {
        "soma" => $numero1 + $numero2,
        "subtração" => $numero1 - $numero2,
        "divisão" => $numero1 / $numero2,
        "multiplicação" => $numero1 * $numero2,
    };
}

echo operacaoMatematica(2, 2, "soma");
echo "\n";

// 2. Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro.

function calculaIMC(float $peso, float $altura): void
{
    $imc = $peso / $altura ** 2;
    if ($imc < 18.5) {
        echo "Abaixo do peso";
    } elseif ($imc > 18.5 && $imc < 25) {
        echo "Peso normal";
    } elseif ($imc >= 25 && $imc < 30) {
        echo "Sobrepeso";
    } elseif ($imc >= 30 && $imc < 35) {
        echo "Obesidade classe 1 (moderada)";
    } elseif ($imc >= 35 && $imc < 40) {
        echo "Obesidade classe 2 (severa)";
    } else {
        echo "Obesidade classe 3 (mórbida)";
    }
}

calculaIMC(120, 1.71);
echo "\n";

// 3. Crie uma função em PHP que converta graus celsius para Fahrenheit.

function celsiusToFahrenheit(float $celsius): float {
    return ($celsius * 9 / 5) + 32;
}

echo celsiusToFahrenheit(40);