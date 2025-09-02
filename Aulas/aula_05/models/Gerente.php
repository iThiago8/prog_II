<?php

class Gerente extends Funcionario {
    private float $bonus;

    public function __construct($salario, $bonus)  {
        parent::__construct($salario);
        $this->bonus = $bonus;
    }

    public function getSalarioFinal():float {
        return $this->salario + $this->bonus;
    }
}