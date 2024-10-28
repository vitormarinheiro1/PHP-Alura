<?php

require __DIR__ . '/classe-pessoa.php';

$pessoa = new Pessoa();
$pessoa->setNome('Vitor');
$pessoa->setIdade(20);
$pessoa->setCpf(99999999999);

echo $pessoa->getNome();
echo "\n";
echo $pessoa->getIdade();
echo "\n";
echo $pessoa->getCpf();

