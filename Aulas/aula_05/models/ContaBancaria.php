<?php

class ContaBancaria {
    private float $saldo;

    public function __construct($saldo) {
        $this->saldo = $saldo;
    }

    public function depositar($valor):void {
        if ($valor <= 0) {
            echo "O valor a ser depositado deve ser maior do que 0<br>";
            return;
        }

        $this->saldo =+ $valor;
        echo "Depósito efetuado com sucesso.<br>";
    }

    public function sacar($valor):void {
        if ($valor > $this->saldo){
            echo "O valor a sacar deve ser menor do que o saldo atual!<br>";
        }

        $this->saldo =+ $valor;
        echo "Saque efetuado com sucesso.<br>";
    }
}