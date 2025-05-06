<?php 
 class Produto{
    public $nome;
    public $preco;
    public $quantidade;

    public function exibeInformacoes() {
        echo "Nome: " . $this->nome . ", Preço: " . $this->preco . ", Quantidade: " . $this->quantidade . "<br>"; 
    }


     
   
   
 }
  function mostrarMediaPrecos($p1, $p2){
    $media = ($p1->preco + $p2->preco) / 2;
    echo "A média de preços é: " . $media . "<br>";
   } 
    //objeto 
    $p1 = new Produto();
    $p1 ->  nome = "caneta";
    $p1 ->  preco = 2.5;
    $p1 -> quantidade = 10; 
    $p1 -> exibeInformacoes();
   

    $p2 = new Produto();
    $p2 ->  nome = "lápis";
    $p2 ->  preco = 1;
    $p2 -> quantidade = 20; 
    $p2 -> exibeInformacoes();

    mostrarMediaPrecos($p1, $p2)
   


   









?>