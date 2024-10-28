<?php

require __DIR__ . "/classe-conta-bancaria.php";

$conta = new ContaBancaria();
echo $conta->setSacar($conta->getSaldo(), 1000);
echo "\n";
echo $conta->getSaldo();
echo "\n";
