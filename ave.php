<?php
    include_once("animal.php");

    class Ave extends Animal{
        public $alturaMaxima;

        public function __construct($peso, $comprimento, $altura, $cor, $nome, $alturaMaxima){
            parent::__construct($peso, $comprimento, $altura, $cor, $nome);

            $this->alturaMaxima = $alturaMaxima;
        }

        public function exibeAve(){
            echo '
                <label> Altura Máxima: </label>
            ';
        }
    }
?>