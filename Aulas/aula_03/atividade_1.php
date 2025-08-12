<?php

class Veiculo {
    public $marca;
    public $modelo;
    public $ano;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;

        return $this;
    }

    public function ToString(){
        return 'Marca do veículo: ' . $this->marca . '<br>' . 'Modelo do veículo: ' . $this->modelo . '<br>' . 'Ano do veículo: ' . $this->ano;
    }
}

$marca = "Yamaha";
$modelo = "YBR 150 FACTOR ED/FLEX";
$ano = "2022";

$c = new Veiculo($marca, $modelo, $ano);
echo $c->ToString();
