<?php
    include_once("animal.php");

    class Peixe extends Animal{
        public $tempoVida;

        public function __construct($peso, $comprimento, $altura, $cor, $nome, $tempoVida){
            parent::__construct($peso, $comprimento, $altura, $cor, $nome);

            $this->tempoVida = $tempoVida;
        }

        public function exibePeixe(){
            echo '
                <label> Tempo de Vida: </label>'.$this->tempoVida.'
            ';
        }
    }
?>