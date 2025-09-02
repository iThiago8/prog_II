<?php

class Pedido {
    /**
     * @var Produto[]
     */
    private array $itens = [];

    public function __construct($itens) {
        foreach ($itens as $item){
            $this->adicionarItem($item);
        }
    }

    public function listarItens(): void{
        if (empty($this->itens)){
            echo "Nenhum item.";
            return;
        }

        foreach ($this->itens as $i => $item) {

            echo "Produto " . $i + 1 . ": " . $item->nome . "<br> Valor: " . $item->getPreco() . "<br>";
        }
    }

    public function adicionarItem($item): void {
        $this->itens[] = $item;
    }
}