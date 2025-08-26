<?php

class ContaBancaria {
    private float $saldo;

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function setSaldo($novoSaldo): void {
        $this->saldo = $novoSaldo;
    }
    public function depositar($valorDeposito): string {
        if ($valorDeposito <= 0)
            return "O valor depositado deve ser maior do que 0!";

        $this->saldo += $valorDeposito;

        return "Depósito de " . $valorDeposito . " realizado com sucesso! O novo saldo é de: " . $this->saldo;
    }

    public function sacar($valor):string {
        if ($valor > $this->saldo)
            return "O valor a sacar não pode ser maior do que o saldo disponível!";

        $this->saldo -= $valor;

        return "Saque efetuado com sucesso! O novo saldo da conta é: $this->saldo";
    }
}