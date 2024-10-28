<?php

class Animal {
    private string $nome;

    private int $idade;

}

class Gato extends Animal {
    public function Miar(){
        echo "Miau\n";
    }
}

class Cachorro extends Animal {
    public function Latir(){
        echo "Au au\n";
    }
}
