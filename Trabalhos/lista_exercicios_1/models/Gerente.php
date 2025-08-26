<?php

class Gerente extends Funcionario {
    public function getSalario(): float {
        return $this->salario;
    }

    public function setSalario($novoSalario): void {
        $this->salario = $novoSalario;
    }
}