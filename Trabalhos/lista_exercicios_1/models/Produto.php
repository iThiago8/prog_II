<?php

class Produto {
    public string $nome;
    private float $valor;

    public function getValor(): float {
        return $this->valor;
    }

    public function setValor($novoValor): void {
        $this->valor = $novoValor;
    }
}