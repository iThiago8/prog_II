<?php

class Estudante {
    public $nome;
    public $sobrenome;
    public $notas;

    public function VerificaAprovacao() {
        $media = array_sum($this->notas) / count($this->notas);

        return $media > 7;
    }
}

$aluno1 = new Estudante();
$aluno1->nome = "Thiago";
$aluno1->sobrenome = "Pedro Padilha";

$nota1 = 6;
$nota2 = 7;
$nota3 = 8;
$nota4 = 5;

$aluno1->notas[] = $nota1;
$aluno1->notas[] = $nota2;
$aluno1->notas[] = $nota3;
$aluno1->notas[] = $nota4;

if ($aluno1->VerificaAprovacao())
    echo "Situação do aluno " . $aluno1->nome . " " . $aluno1->sobrenome . ": Aprovado";
else
    echo "Situação do aluno " . $aluno1->nome . " " . $aluno1->sobrenome . ": Reprovado";
