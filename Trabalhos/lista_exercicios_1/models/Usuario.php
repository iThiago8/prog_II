<?php

class Usuario {
    public string $nome_usuario;
    private string $senha;

    public function setSenha($novaSenha): void {
        $this->senha = $novaSenha;
    }
    public function verificaSenha($senha): bool {
        return $senha === $this->senha;
    }
}