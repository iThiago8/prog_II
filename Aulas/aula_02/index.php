<?php

class User {
    public $nome;
    public $email;
    public $idade;

    public function __construct($nome, $email, $idade) {
        $this->nome = $nome;
        $this->email = $email;
        $this->idade = $idade;
    }

    public function exibirDados() {
        echo "Nome do usuário: $this->nome <br>";
        echo "Email do usuário: $this->email <br>";
        echo "Idade do usuário: $this->idade <br>";
    }

    public function maioridade() {
        $maior = $this->idade >= 18;
        if ($maior)
            echo 'Usuário maior de idade';
        else
            echo 'Usuário menor de idade';
    }
}

$nome = 'Thiago Pedro Padilha';
$email = 'thiago.pedro.padilha@gmail.com';
$idade = 18;

$u = new User($nome,$email, $idade);

$u->exibirDados();
$u->maioridade();