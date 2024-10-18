<?php

// 1 - Escreva um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100.
for ($i = 1; $i < 100; $i++) {
    if ($i % 2 !== 0) {
        echo "$i\n";
    }
}
echo "\n";

// 2 - Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC.

$altura = 1.75;
$peso = 90;
$imc = $peso / $altura ** 2;

if ($imc < 18.5) {
    echo "Abaixo do peso";
} elseif ($imc >= 18.5 && $imc < 25) {
    echo "Peso normal";
} elseif ($imc >= 25 && $imc < 30) {
    echo "Sobrepeso";
} else {
    echo "Obesidade";
}
echo "\n";


// 3 - Desenvolva um programa que exiba na tela uma saudação (bom dia, boa tarde ou boa noite) dependendo do horário encontrado em uma variável (inteiro representando as horas).
$horario = 10;

if ($horario > 6 && $horario < 12) {
    echo "Bom dia!";
} elseif ($horario >= 12 && $horario < 18) {
    echo "Boa tarde!";
} else {
    echo "Boa noite!";
}
