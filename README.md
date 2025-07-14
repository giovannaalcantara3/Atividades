<?php
class Livro {
    public $titulo;
    public $autor;
    public $disponivel = true;

    public function emprestar() {
        if ($this->disponivel) {
            $this->disponivel = false;
            echo "Livro emprestado com sucesso.<br>";
        } else {
            echo "Livro indisponível.<br>";
        }
    }

    public function devolver() {
        $this->disponivel = true;
        echo "Livro devolvido com sucesso.<br>";
    }
}

class Aluno {
    public $nome;
    public $matricula;

    public function pegarLivro(Livro $livro) {
        $livro->emprestar();
    }
}

// Criando objetos
$livro1 = new Livro();
$livro1->titulo = "O Pequeno Príncipe";
$livro1->autor = "Antoine de Saint-Exupéry";

$livro2 = new Livro();
$livro2->titulo = "Dom Casmurro";
$livro2->autor = "Machado de Assis";

$aluno1 = new Aluno();
$aluno1->nome = "João";
$aluno1->matricula = "2025001";


$aluno1->pegarLivro($livro1); 
$aluno1->pegarLivro($livro1); 
$livro1->devolver();         
$aluno1->pegarLivro($livro1); 
?>
