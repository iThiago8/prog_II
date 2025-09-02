<?php

class Funcionario {
    protected float $salario;

    public function __construct($salario) {
        $this->salario = $salario;
    }
}