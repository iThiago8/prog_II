<?php

class ConfigAvancada extends Config {
    public function adicionaParametro(string $chave, mixed $valor): void {
        $this->parametros[$chave] = $valor;
    }

    public function exibeParametros(): void {
        if (empty($this->parametros)) {
            echo "Nenhum parâmetro definido";
            return;
        }
        foreach ($this->parametros as $chave => $valor) {
            echo "Chave: $chave <br> Valor: $valor <br>";
        }
    }
}