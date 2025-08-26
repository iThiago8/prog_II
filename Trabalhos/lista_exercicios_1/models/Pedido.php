<?php

class Pedido {
    /**
     * @var Produto[]
     */
    private array $itens = [];

    public function listarItens(): void{
        if (empty($this->itens)){
            echo "Nenhum item.";
            return;
        }

        foreach ($this->itens as $i => $item) {

            echo "Produto " . $i + 1 . ": " . $item->nome . "<br> Valor: " . $item->getValor() . "<br>";
        }
    }

    public function adicionarItem($item): void {
        $this->itens[] = $item;
    }
}