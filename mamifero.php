<?php
    include_once("animal.php");

    class Mamifero extends Animal{
        public $velocidadeMaxima;

        public function __construct($peso, $comprimento, $altura, $cor, $nome, $velocidadeMaxima){
            parent::__construct($peso, $comprimento, $altura, $cor, $nome);

            $this->velocidadeMaxima = $velocidadeMaxima;
        }

        public function exibeMamifero(){
            echo '
                <label> Velocidade Máxima: </label>'.$this->velocidadeMaxima.'
            ';
        }
    }
?>