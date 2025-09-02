<?php

class Usuario {
    public string $nome_usuario;
    private string $senha;

    public function __construct($nome_usuario, $senha, $confirmacaoSenha) {
        if ($senha != $confirmacaoSenha) {
            echo "As senhas não coincidem.";
            return;
        }

        $this->nome_usuario = $nome_usuario;
        $this->senha = $senha;
    }

    public function setSenha($novaSenha): void {
        $this->senha = $novaSenha;
    }
    public function verificaSenha($senha): bool {
        return $senha === $this->senha;
    }
}