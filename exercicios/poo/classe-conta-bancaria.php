<?php

class ContaBancaria {
    private string $titular;
    private int $saldo = 2000;

    public function getSaldo(): int {
        return $this->saldo;
    }

    public function setSacar(int $saldo, int $valor) {
        if ($valor > $saldo) {
            echo "Não há saldo suficiente";
        } else {
            $this->saldo = $saldo - $valor;
        }
    }

    public function setDepositar(int $saldo, int $valor) {
        $this->saldo = $saldo + $valor;
    }
}
