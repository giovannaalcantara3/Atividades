<?php
class ContaBancaria {
    private $titular;
    private $saldo;

    public function __construct($titular, $saldoInicial = 0) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
        } else {
            echo "Valor inválido para depósito.<br>";
        }
    }

    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
        } else {
            echo "Saque inválido.<br>";
        }
    }

    public function getTitular() {
        return $this->titular;
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

$conta = new ContaBancaria("Maria", 1000);
$conta->depositar(500);
$conta->sacar(300);
echo "Titular: " . $conta->getTitular() . "<br>";
echo "Saldo: " . $conta->getSaldo();
?>