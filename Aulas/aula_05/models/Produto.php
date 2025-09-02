<?php

class Produto {
    public string $nome;
    private float $preco;

    public function __construct($preco) {
        $this->preco = $preco;
    }

    public function getPreco():float {
        return $this->preco;
    }

    public function setPreco($preco):void {
        if ($preco < 0) {
            echo "O preço não pode ser negativo!<br>";
            return;
        }

        $this->preco = $preco;
        echo "Preço alterado com sucesso.<br>";
    }
}