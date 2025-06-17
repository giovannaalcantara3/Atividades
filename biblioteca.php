<?php

class Livro {
    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $disponivel;
    protected $leitorAtual;

    public function __construct($titulo, $autor, $anoPublicacao) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->disponivel = true;
        $this->leitorAtual = "";
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getAnoPublicacao() {
        return $this->anoPublicacao;
    }

    public function setAnoPublicacao($anoPublicacao) {
        $this->anoPublicacao = $anoPublicacao;
    }

    public function getDisponivel() {
        return $this->disponivel;
    }

    public function setDisponivel($disponivel) {
        $this->disponivel = $disponivel;
    }

    public function getLeitorAtual() {
        return $this->leitorAtual;
    }

    public function setLeitorAtual($leitorAtual) {
        $this->leitorAtual = $leitorAtual;
    }

    public function exibirInformacoes() {
        echo "Título: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "Ano: " . $this->anoPublicacao . "<br>";
        echo "Disponível: " . ($this->disponivel ? "Sim" : "Não") . "<br>";
        echo "Leitor Atual: " . $this->leitorAtual . "<br><br>";
    }

    public function emprestar($nomeLeitor) {
        if ($this->disponivel) {
            $this->disponivel = false;
            $this->leitorAtual = $nomeLeitor;
            echo "Livro emprestado para: " . $nomeLeitor . "<br>";
        } else {
            echo "Livro não disponível para empréstimo.<br>";
        }
    }

    public function devolver() {
        if (!$this->disponivel) {
            $this->disponivel = true;
            echo "Livro devolvido por: " . $this->leitorAtual . "<br>";
            $this->leitorAtual = "";
        } else {
            echo "O livro já estava disponível.<br>";
        }
    }

    public function estaDisponivel() {
        echo $this->disponivel ? "O livro está disponível.<br>" : "O livro está emprestado.<br>";
    }

    public function quemPegou() {
        return $this->leitorAtual;
    }
}

class Leitor {
    private $nome;
    private $email;
    private $telefone;

    public function __construct($nome, $email, $telefone) {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function exibirLeitor() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Telefone: " . $this->telefone . "<br><br>";
    }
}
class Biblioteca {
    public $nomeBiblioteca;
    private $livros = array();
    private $leitores = array();

    public function __construct($nomeBiblioteca) {
        $this->nomeBiblioteca = $nomeBiblioteca;
    }

    public function adicionarLivro(Livro $livro) {
        $this->livros[] = $livro;
    }

    public function adicionarLeitor(Leitor $leitor) {
        $this->leitores[] = $leitor;
    }

    public function listarLivros() {
        echo "<h3>Livros na biblioteca:</h3>";
        foreach ($this->livros as $livro) {
            $livro->exibirInformacoes();
        }
    }

    public function listarLeitores() {
        echo "<h3>Leitores cadastrados:</h3>";
        foreach ($this->leitores as $leitor) {
            $leitor->exibirLeitor();
        }
    }
}


$livro1 = new Livro("Dom Casmurro", "Machado de Assis", 1899);
$livro2 = new Livro("O Pequeno Príncipe", "Antoine de Saint-Exupéry", 1943);
$livro3 = new Livro("1984", "George Orwell", 1949);


$leitor1 = new Leitor("Maria", "maria@gmail.com", "9999-9999");
$leitor2 = new Leitor("João", "joao@gmail.com", "8888-8888");

$biblioteca = new Biblioteca("Biblioteca Comunitária");


$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);
$biblioteca->adicionarLivro($livro3);

$biblioteca->adicionarLeitor($leitor1);
$biblioteca->adicionarLeitor($leitor2);


$biblioteca->listarLivros();
$biblioteca->listarLeitores();


$livro1->emprestar($leitor1->getNome());
$livro1->estaDisponivel();
echo "Quem pegou o livro: " . $livro1->quemPegou() . "<br>";

$livro1->devolver();
$livro1->estaDisponivel();
?>