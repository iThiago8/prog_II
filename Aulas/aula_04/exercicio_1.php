<?php

class Conta {
    public $titular;
    public $saldo;
    public $numero;

    public function __construct($titular, $saldo) {
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->numero = rand(1000, 9999);
    }

    public function exibirDados() {
        return "Número da conta: $this->numero <br>Titular da conta: $this->titular <br>Saldo atual: $this->saldo";
    }

    public function depositar($deposito){
        $this->saldo += $deposito;
    }
}

$conta1 = new Conta("Thiago Pedro Padilha", 854.51);
$conta2 = new Conta("Gabriel Ceron Bianchi", 884.37);

echo $conta1->exibirDados() . "<br><br>";

$deposito = rand(1, 123);
$conta1->depositar($deposito);

echo $conta1->exibirDados() . "<br>";
echo "Valor depositado: $deposito<br>";
