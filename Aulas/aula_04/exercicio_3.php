<?php

class Livro {
    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $numeroPaginas;
    private $disponivel;

    public function __construct($titulo, $autor, $anoPublicacao, $numeroPaginas) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->numeroPaginas = $numeroPaginas;
        $this->disponivel = true;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        if (isNullOrWhiteSpace($titulo))
            return "O título não pode ser nulo ou string vazia!";

        $this->titulo = $titulo;

        return "Título alterado";
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        if (isNullOrWhiteSpace($autor))
            return "O autor não pode ser nulo ou string vazia!";

        $this->autor = $autor;

        return "Autor alterado";
    }

    public function getAnoPublicacao() {
        return $this->anoPublicacao;
    }

    public function getNumeroPaginas() {
        return $this->numeroPaginas;
    }

    public function getDisponivel() {
        return $this->disponivel;
    }
}

$livro1 = new Livro("Percy Jackson", "Rick", "2010-01-03", 345);


echo "Nome do livro 1: " . $livro1->getTitulo() . "<br>";
echo $livro1->setTitulo("") . "<br>";
echo $livro1->setTitulo("Percy Jackson e o Ladrão de Raios") . "<br>";
echo "Nome do livro 1: " . $livro1->getTitulo() . "<br><br>";

echo "Autor do livro 1: " . $livro1->getAutor() . "<br>";
echo $livro1->setAutor("") . "<br>";
echo $livro1->setAutor("Rick Riordan") . "<br>";
echo "Autor do livro 1: " . $livro1->getAutor() . "<br><br>";




function isNullOrWhiteSpace($titulo){
    return (is_null($titulo) || trim($titulo) === '');
}
