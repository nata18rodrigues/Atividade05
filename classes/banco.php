<?php
    class Banco {
        public $conta = "4589723-9";
        public $saldo;
        public function depositar($valor)//função que fica dentro de um objeto se chama médoto
        {
            //$slado = $saldo + 50;
            $this->saldo += $valor;
        }

        public function sacar($valor)
        {
            //$slado = $saldo + 50;
            $this->saldo -= $valor;
        }
    }

?>