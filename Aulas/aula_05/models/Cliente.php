<?php

class Cliente {
    private string $cpf;
    private string $nome;

    public function cpfValido($cpf):bool {
        $cpf = preg_replace('/[^0-9]/', '', $cpf);

        if (strlen($cpf) != 11) {
            return false;
        }

        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        $soma = 0;
        for ($i = 0; $i < 9; $i++) {
            $soma += $cpf[$i] * (10 - $i);
        }

        $resto = $soma % 11;
        $digito1 = ($resto < 2) ? 0 : 11 - $resto;

        if ($cpf[9] != $digito1) {
            return false;
        }

        $soma = 0;
        for ($i = 0; $i < 10; $i++) {
            $soma += $cpf[$i] * (11 - $i);
        }
        $digito2 = ($resto < 2) ? 0 : 11 - $resto;

        if ($cpf[10] != $digito2) {
            return false;
        }

        return true;
    }

    public function __construct($cpf, $nome) {
        if (!$this->cpfValido(($cpf))){
            echo "CPF inválido!<br>";
            return;
        }

        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function getCpf():string {
        return $this->cpf;
    }
    public function getNome():string {
        return $this->nome;
    }

    public function setCpf($cpf):void {
        if (!$this->cpfValido($cpf)){
            echo "CPF inválido!<br>";
            return;
        }

        $this->cpf = $cpf;
        echo "Cpf alterado!<br>";
    }

    public function setNome($nome):void {
        $this->nome = $nome;
        echo "Nome alterado!<br>";
    }
}