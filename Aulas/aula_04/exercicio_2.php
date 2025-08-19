<?php

class Aluno {
    public $nome;
    private $matricula;
    private $notas;
    private $media;

    public function __construct($nome, $matricula) {
        $this->matricula = $matricula;
        $this->nome = $nome;
    }

    private function calculaMedia() {
        $notas = $this->notas;
        return (array_sum($notas) / count($notas));
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getNotas() {
        return $this->notas;
    }

    public function adicionarNota($nota) {
        $this->notas[] = $nota;
    }

    public function verificaSituacao() {
        return $this->calculaMedia() >= 7 ? "Aprovado" : "Reprovado";
    }
}

$aluno1 = new Aluno("Thiago Pedro Padilha", 993);
echo "Matrícula do aluno $aluno1->nome: " . $aluno1->getMatricula() . "<br><br>";

$nota1 = 9.5;
$nota2 = 7.5;
$nota3 = 1;
$nota4 = 10;

$aluno1->adicionarNota($nota1);
$aluno1->adicionarNota($nota2);
$aluno1->adicionarNota($nota3);
$aluno1->adicionarNota($nota4);

foreach ($aluno1->getNotas() as $i => $nota) {
    echo "Nota: $nota <br>";
}
echo "<br>";

echo "Situação do aluno de matrícula " . $aluno1->getMatricula() . " e nome $aluno1->nome : " . $aluno1->verificaSituacao();