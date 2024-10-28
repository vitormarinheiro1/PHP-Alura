<?php
function isPrime($num) {
    if ($num <= 1) {
        return "Não é primo.";
    } elseif ($num == 2 || $num == 3) {
        return "É primo.";
    } elseif ($num % 2 == 0) {
        return "Não é primo.";
    }

    for ($i = 3; $i <= sqrt($num); $i += 2) {
        if ($num % $i == 0) {
            return "Não é primo.";
        }
    }
    return "É primo.";
}

$i = 6;
echo isPrime($i);
