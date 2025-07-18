<?php
class Carro {
    private $modelo;
    private $cor;
    private $ano;

    public function __construct($modelo, $cor, $ano) {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getCor() {
        return $this->cor;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

    public function getAno() {
        return $this->ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }
}

$carro1 = new Carro("Gol", "Vermelho", 2010);

echo "Modelo: " . $carro1->getModelo() . "<br>";
echo "Cor: " . $carro1->getCor() . "<br>";
echo "Ano: " . $carro1->getAno();
?>