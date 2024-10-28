<?php

require __DIR__ . "/classe-carro.php";

$carro = new Carro();

echo "A velocidade atual é {$carro->getVelocidade()} km.\n";

$carro->setAcelerar($carro->getVelocidade(),200);
echo "A velocidade atual é {$carro->getVelocidade()} km.\n";

$carro->setFrear($carro->getVelocidade(),200);
echo "A velocidade atual é {$carro->getVelocidade()} km.\n";
