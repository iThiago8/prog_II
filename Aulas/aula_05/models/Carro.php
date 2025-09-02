<?php

class Carro {
    public string $modelo;
    private float $velocidade;

    public function __construct($modelo, $velocidadeAtual) {
        $this->modelo = $modelo;
        $this->velocidade = $velocidadeAtual;
    }

    public function acelerar($velocidade) {
        if (($this->velocidade + $velocidade) > 200) {
            echo "A velocidade não pode passar de 200 km/h!";
            return;
        }

        $this->velocidade =+ $velocidade;
        return $this->velocidade;
    }

    public function frear($velocidade) {
        if (($this->velocidade + $velocidade) > 200) {
            echo "A velocidade não pode diminuir de 0 km/h!";
            return;
        }

        $this->velocidade =- $velocidade;
        return $this->velocidade;
    }


}