<?php

require __DIR__ . "/classe-animal.php";

$gato = new Gato();
$cachorro = new Cachorro();

echo $gato->Miar();

echo $cachorro->Latir();