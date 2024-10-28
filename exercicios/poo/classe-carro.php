<?php

class Carro {
    private string $marca;

    private string $modelo;

    private string $cor;

    private int $velocidade = 0;

    public function setAcelerar(int $velocidade, int $valor) {
        echo "Acelerando...\n";
        $this->velocidade = $velocidade + $valor;
    }

    public function setFrear(int $velocidade, int $valor) {
        echo "Freando...\n";
        if($valor > $velocidade) {
            echo "O carro parou.\n";
        } else {
            $this->velocidade = $velocidade - $valor;
        }
    }

    public function getVelocidade(): int {
        return $this->velocidade;
    }
}